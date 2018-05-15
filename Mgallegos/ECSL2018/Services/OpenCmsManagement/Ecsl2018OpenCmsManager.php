<?php
/**
 * @file
 * Description of the script.
 *
 * All DecimaERP code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

namespace Mgallegos\ECSL2018\Services\OpenCmsManagement;

use Carbon\Carbon;

use nusoap_client;

use Illuminate\Contracts\Hashing\Hasher;

use Illuminate\Auth\Passwords\PasswordBroker;

use Illuminate\Auth\Passwords\PasswordBrokerManager;

use Illuminate\Config\Repository;

use Illuminate\Http\Request;

use Illuminate\Cookie\CookieJar;

use Illuminate\Session\SessionManager;

use Illuminate\Routing\Redirector;

use Illuminate\Routing\UrlGenerator;

use Illuminate\Validation\Factory;

use Illuminate\Log\Writer;

use Illuminate\Database\DatabaseManager;

use Symfony\Component\Translation\TranslatorInterface;

use App\Kwaai\Security\Services\AuthenticationManagement\AuthenticationManagementInterface;

use Mgallegos\DecimaOpenCms\OpenCms\Services\SettingManagement\SettingManagementInterface;

use Mgallegos\DecimaOpenCms\OpenCms\Services\OpenCmsManagement\OpenCmsManager;

use Mgallegos\DecimaSale\Sale\Services\SaleOrderManagement\SaleOrderManagementInterface;

use Mgallegos\DecimaOpenCms\OpenCms\Repositories\User\UserInterface;

use Mgallegos\DecimaOpenCms\OpenCms\Repositories\UserEvent\UserEventInterface;

use Mgallegos\ECSL2018\Repositories\RegistrationForm\RegistrationFormInterface;

use Mgallegos\DecimaOpenCms\OpenCms\Repositories\Payment\PaymentInterface;

use App\Kwaai\System\Repositories\Currency\CurrencyInterface;

use App\Kwaai\Organization\Repositories\Organization\OrganizationInterface;

use App\Kwaai\Security\Services\JournalManagement\JournalManagementInterface;

use App\Kwaai\Security\Repositories\Journal\JournalInterface;

class Ecsl2018OpenCmsManager extends OpenCmsManager {

  /**
	 * Sale Order Manager Service
	 *
	 * @var Mgallegos\DecimaSale\Sale\Services\SaleOrderManagement\SaleOrderManagementInterface
	 *
	 */
	protected $SaleManager;

  /**
	* Virtual assistant id
	*
	* @var Integer
	*/
	protected $virtualAssistantId;

  /**
	* Event id
	*
	* @var Integer
	*/
	protected $eventId;

  /**
	* Organization id
	*
	* @var Integer
	*/
	protected $organizationId;

  /**
	* CMS Database Connection
	*
	* @var Integer
	*/
	protected $cmsDatabaseConnectionName;

	public function __construct(
    AuthenticationManagementInterface $AuthenticationManager,
		JournalManagementInterface $JournalManager,
		SettingManagementInterface $SettingManager,
		JournalInterface $Journal,
		OrganizationInterface $Organization,
		CurrencyInterface $Currency,
		UserInterface $User,
		UserEventInterface $UserEvent,
		RegistrationFormInterface $RegistrationForm,
		PaymentInterface $Payment,
		TranslatorInterface $Lang,
		UrlGenerator $Url,
		Redirector $Redirector,
		CookieJar $Cookie,
		Request $Input,
		Repository $Config,
		PasswordBrokerManager $Password,
		Hasher $Hash,
		SessionManager $Session,
		Factory $Validator,
		Writer $Log,
    DatabaseManager $DB,
    Carbon $Carbon,
    SaleOrderManagementInterface $SaleManager
	)
	{
    $this->AuthenticationManager = $AuthenticationManager;

		$this->JournalManager = $JournalManager;

    $this->SettingManager = $SettingManager;

    $this->Journal = $Journal;

		$this->Organization = $Organization;

		$this->User = $User;

    $this->UserEvent = $UserEvent;

		$this->RegistrationForm = $RegistrationForm;

		$this->Payment = $Payment;

		$this->Currency = $Currency;

		$this->Lang = $Lang;

		$this->Url = $Url;

		$this->Redirector = $Redirector;

		$this->Cookie = $Cookie;

		$this->Input = $Input;

		$this->Config = $Config;

		$this->Password = $Password;

		$this->Hash = $Hash;

		$this->Session = $Session;

		$this->Validator = $Validator;

    $this->Log = $Log;

    $this->DB = $DB;

    $this->Carbon = $Carbon;

    // $this->defaultDatabaseConnectionName = 'default';

    $this->organizationId = 15;

    $this->cmsDatabaseConnectionName = 'ecsl2018';

    $this->virtualAssistantId = 65;

    $this->eventId = 1;

    $this->eventPrefix = 'ecsl2018slca';

    $this->SaleManager = $SaleManager;

		$this->rules = array(
			'kwaai_name' => 'honeypot',
			'kwaai_time' => 'required|honeytime:2',
			'email' => 'required|email',
			'password' => 'min:6|required|same:confirm_password'
		);

		$this->messages = array(
			'email.email' => $this->Lang->get('security/user-management.invalidEmailInfoMessage'),
			'password.min' => $this->Lang->get('security/user-management.passwordsMinLengthInfoMessage'),
			'password.same' => $this->Lang->get('security/user-management.passwordsDoNotMatchInfoMessage')
		);
	}

	/**
	 * Create a new CMS User.
	 *
	 * @param array $input
	 *	An array as follows: array('firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'password'=>$password, 'is_active'=>$is_active, 'created_by'=>$created_by);
	 *
	 * @return JSON encoded string
	 *  A string as follows:
	 *  In case of success (non-admin user): {"success":security/user-management.successSaveMessage}
	 *  In case of success (admin user): {"success":form.defaultSuccessSaveMessage}
	 *  In case of a non-admin user tries to add an admin user: {"info":security/user-management.nonAdminException}
	 *  In case of an existing user: {"info":security/user-management.UserExistsException}
	 *  In form does not pass validation: {"validationFailed":true, "fieldValidationMessages":{$field0:$message0, $field1:$message1,…}}
	 */
	public function create(array $input, $openTransaction = true)
	{
    $this->rules = array(
			'kwaai_name' => 'honeypot',
			'kwaai_time' => 'required|honeytime:2',
			'email' => 'required|email',
			'password' => 'min:6|required|same:confirm_password'
		);

		$data = array(
      'kwaai_name' => $input['kwaai_name'],
			'kwaai_time' => $input['kwaai_time'],
			'email' => $input['email'],
			'password' => $input['password'],
			'confirm_password' => $input['confirm_password']
		);

		if( $this->with( $data )->fails() )
		{
			return json_encode(array('validationFailed' => true , 'fieldValidationMessages' => $this->singleMessageStringByField()));
		}

		if(!$this->User->byEmailAndByOrganization($input['email'], $this->organizationId, $this->cmsDatabaseConnectionName)->isEmpty())
		{
			return json_encode(array('validationFailed' => true , 'fieldValidationMessages' => array('email' => $this->Lang->get('security/user-management.UserExistsException'))));
		}

		// Activation by email
		// $input['is_active'] = 0;
		// $email = $input['email'];
		// $value = str_shuffle(sha1($email.spl_object_hash($this).microtime(true)));
		// $input['activation_code'] = hash_hmac('sha1', $value, $this->hashKey);
		// $sender = $this->AuthenticationManager->getLoggedUserFirstname() . ' ' . $this->AuthenticationManager->getLoggedUserLastname();
		// $subject = $this->Lang->get('security/user-activation.emailSubject', array('systemName' => $this->Config->get('system-security.system_name')));

		$this->beginTransaction($openTransaction, $this->cmsDatabaseConnectionName);

		try
		{
      $input['organization_id'] = $this->organizationId;

			$User = $this->User->create(
        array(
          'firstname' => $input['firstname'],
          'lastname' => $input['lastname'],
          'email' => $input['email'],
          'password' => bcrypt($input['password']),
          'organization_id' => $input['organization_id'],
          'is_active' => 1,
        ),
        $this->cmsDatabaseConnectionName
      );

      $input['user_id'] = $User->id;

      $this->UserEvent->create(
        array(
          'user_id' => $input['user_id'],
          'event_id' => $this->eventId,
          'organization_id' => $input['organization_id'],
        ),
        $this->cmsDatabaseConnectionName
      );

      $context = array_only($input, ['firstname', 'lastname', 'email']);

      unset(
        $input['token'],
        $input['firstname'],
        $input['lastname'],
        $input['email'],
        $input['password'],
        $input['kwaai_name'],
        $input['kwaai_time'],
        $input['confirm_password'],
        $input['registration_form_id']
      );

      if(isset($input['birth_date']) && !empty($input['birth_date']))
      {
        $input['birth_date'] = $this->Carbon->createFromFormat($this->Lang->get('form.phpShortDateFormat'), $input['birth_date'])->format('Y-m-d');
      }

      $RegistrationForm = $this->RegistrationForm->create($input, $this->cmsDatabaseConnectionName);

      // client_id
      // payment_id
      // arriving_transportation_request_id
      // leaving_transportation_request_id

		  // $Journal = $this->Journal->create(array('journalized_id' => $User->id, 'journalized_type' => $this->User->getTable(), 'user_id' => $input['created_by']));
		  // $this->Journal->attachDetail($Journal->id, array('n=> $this->AuthenticationManager->getCurrentUserOrganization('name')))), $Journal);

      $this->Log->info('[SECURITY EVENT] A new user has registered at ECSL 2018', $context);

			$this->commit($openTransaction);
		}
		catch (\Exception $e)
    {
				$this->rollBack($openTransaction);

				throw $e;
		} catch (\Throwable $e)
    {
				$this->rollBack($openTransaction);

				throw $e;
		}

		// Send email
		// $replyToEmail = $this->Config->get('system-security.reply_to_email');
		// $replyToName = $this->Config->get('system-security.reply_to_name');
		//
		// $this->Mailer->queue('security.emails.activation', array('addressee' => $input['firstname'], 'sender' => $sender, 'token' => $input['activation_code']), function($message) use ($input, $subject, $replyToEmail, $replyToName)
		// {
		// 	$message->to($input['email'])->subject($subject)->replyTo($replyToEmail, $replyToName);
		// });

		return json_encode(array('success' => $this->Lang->get('form.defaultSuccessSaveMessage')));
	}

	/**
	 * Update user.
	 *
	 * @param array $input
	 *	An array as follows: array('firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'password'=>$password, 'is_active'=>$is_active, 'created_by'=>$created_by);
	 *
	 * @return JSON encoded string
	 *  A string as follows:
	 *  In case of success (non-admin user): {"success":security/user-management.successSaveMessage}
	 *  In case of success (admin user): {"success":form.defaultSuccessSaveMessage}
	 *  In case of a non-admin user tries to add an admin user: {"info":security/user-management.nonAdminException}
	 *  In case of an existing user: {"info":security/user-management.UserExistsException}
	 *  In form does not pass validation: {"validationFailed":true, "fieldValidationMessages":{$field0:$message0, $field1:$message1,…}}
	 */
	public function update(array $input)
	{
		$data = array(
			'email' => $input['email'],
			'password' => $input['password'],
			'confirm_password' => $input['confirm_password']
		);

		if( $this->with( $data )->fails() )
		{
			return json_encode(array('validationFailed' => true , 'fieldValidationMessages' => $this->singleMessageStringByField()));
		}

		if(!$this->User->byEmail($input['email'])->isEmpty())
		{
			return json_encode(array('validationFailed' => true , 'fieldValidationMessages' => array('email' => $this->Lang->get('security/user-management.UserExistsException'))));
		}

    $this->beginTransaction($openTransaction, $this->cmsDatabaseConnectionName);

		try
		{
      $this->User->update($input, $User);
		  // $Journal = $this->Journal->create(array('journalized_id' => $User->id, 'journalized_type' => $this->User->getTable(), 'user_id' => $input['created_by']));
		  // $this->Journal->attachDetail($Journal->id, array('note' => $this->Lang->get('security/user-management.adminUserAddedJournal', array('email' => $input['email'], 'organization' => $this->AuthenticationManager->getCurrentUserOrganization('name')))), $Journal);
			// $data = $input;
			// unset($data['password'], $data['activation_code']);
			// $this->Event->fire(new OnNewInfoMessage(array('message' => '[SECURITY EVENT] A new admin user has been added to the system', 'context' => $data), $this->AuthenticationManager));

			$this->commit($openTransaction);
		}
		catch (\Exception $e) {
				$this->rollBack($openTransaction);

				throw $e;
		} catch (\Throwable $e) {
				$this->rollBack($openTransaction);

				throw $e;
		}

		return json_encode(array('success' => $this->Lang->get('form.defaultSuccessSaveMessage')));
	}

  /**
   * Register payment
   *
   * @param array $input
   *	An array as follows: array('firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email);
   *
   * @return JSON encoded string
   *  A string as follows:
   */
  public function registerPayment(array $input)
  {

  }

  /**
   * Make payment
   *
   * @param array $input
   *	An array as follows: array('firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email);
   *
   * @return JSON encoded string
   *  A string as follows:
   */
  public function attemptPayment(array $input)
  {
    $UID = '3b5fe62169c492b285fab24d63334f1d';
    $WSK = '7c769929fa407504abf706b9ee337b2d';
    $WSPG = 'https://sandbox.pagadito.com/comercios/wspg/charges.php?wdsl';

    /*
     * Lo primero es crear el objeto nusoap_client, al que se le pasa como
     * parámetro la URL de Conexión definida en la constante WSPG
     */
    $oSoap = new nusoap_client($WSPG);

    $err = $oSoap->getError();

    if (!$err)
    {
        /*
         * Lo siguiente será consumir la operación 'connect', a la cual le
         * pasaremos el UID y WSK para solicitarle un token de conexión al WSPG.
         * Alternativamente le enviamos el formato en el que queremos que nos
         * responda el WSPG, en este ejemplo solicitamos el formato PHP.
         */
        $params = array(
            "uid"           => $UID,
            "wsk"           => $WSK,
            "format_return" => "php"
        );

        $response = $oSoap->call('connect', $params);
        $data_response = unserialize($response);

        // var_dump($data_response);die();
        // object(stdClass)[2599]
        //   public 'code' => string 'PG1001' (length=6)
        //   public 'message' => string 'Connection successful.' (length=22)
        //   public 'value' => string '75635d4f202e8428490624a8240ade0b' (length=32)
        //   public 'datetime' => string '2018-05-12 13:37:21' (length=19)

        if (!$oSoap->fault)
        {
            /*
             * Debido a que el WSPG nos puede devolver diversos mensajes de
             * respuesta, validamos el tipo de mensaje que nos devuelve.
             */
            switch($data_response->code)
            {
                case "PG1001":
                    /*
                     * En caso de haber recibido un token exitosamente,
                     * procedemos a definir los detalles de la venta, para ello
                     * definimos el siguiente arreglo.
                     */
                    $token = $data_response->value;
                    $details = array();
                    // if($_POST["cantidad1"]>0)
                    // {
                    //     $details[] =
                    //         array(
                    //             "quantity"      => $_POST["cantidad1"],
                    //             "description"   => $_POST["descripcion1"],
                    //             "price"         => $_POST["precio1"],
                    //             "url_product"   => $_POST["url1"]
                    //         );
                    // }

                    $details[] =
                        array(
                            "quantity"      => 1,
                            "description"   => $input['description'],
                            "price"         => $input['amount'],
                            // "url_product"   => $_POST["url1"]
                        );

                    /*
                     * A continuación, procedemos a consumir la operación
                     * exec_trans, para solicitar al WSPG que registre nuestra
                     * transacción. Para ello le enviamos token, ern, amount y
                     * details. Alternativamente, le enviamos el formato en el
                     * que queremos que nos responda el WSPG, en este ejemplo
                     * solicitamos el formato PHP.
                     *
                     * A manera de ejemplo el ern es generado como un número
                     * aleatorio entre 1000 y 2000. Lo ideal es que sea una
                     * referencia almacenada por el Pagadito Comercio.
                     */
                    $params = array(
                        "token"         => $token,
                        "ern"           => rand(1, 2000),
                        // "ern"           => 1001,
                        "amount"        => $input['amount'],
                        "details"       => json_encode($details),
                        "format_return" => "php"
                    );
                    $response = $oSoap->call('exec_trans', $params);
                    $data_response = unserialize($response);

                    // var_dump($data_response);die();
                    // object(stdClass)[2598]
                    // public 'code' => string 'PG1002' (length=6)
                    // public 'message' => string 'Transaction register successful.' (length=32)
                    // public 'value' => string 'https://sandbox.pagadito.com/comercios/index.php?mod=login&token=817113a613f43c063043c5048bdef30f' (length=97)
                    // public 'datetime' => string '2018-05-12 13:19:51' (length=19)

                    /*
                     * Debido a que el WSPG nos puede devolver diversos mensajes
                     * de respuesta, validamos el tipo de mensaje que nos
                     * devuelve.
                     */
                    switch($data_response->code)
                    {
                        case "PG1002":
                            /*
                             * En caso de haberse registrado la transacción
                             * exitosamente, redireccionamos al usuario a la
                             * URL devuelta por el WSPG.
                             */
                            // header("Location: $data_response->value");
                            return $this->Redirector->to($data_response->value);
                            break;
                        case "PG2001":
                            /*
                             * Tratamiento para datos incompletos.
                             */
                        case "PG3002":
                            /*
                             * Tratamiento para error.
                             */
                        case "PG3003":
                            /*
                             * Tratamiento para transacción no registrada.
                             */
                        case "PG3004":
                            /*
                             * Tratamiento para monto desigual
                             */
                        case "PG3006":
                            /*
                             * Tratamiento para monto excedido.
                             */
                        case "PG3007":
                            /*
                             * Tratamiento para acceso denegado.
                             */
                        default:
                            /*
                             * Por ser un ejemplo, se muestra en una ventana
                             * emergente el código y mensaje de la respuesta
                             * del WSPG
                             */
                            echo "
                                <SCRIPT>
                                    alert(\"$data_response->code: $data_response->message\");
                                    location.href = 'index.php';
                                </SCRIPT>
                            ";
                            break;
                    }
                    break;
                case "PG2001":
                    /*
                     * Tratamiento para datos incompletos.
                     */
                case "PG3001":
                    /*
                     * Tratamiento para conexión dengada.
                     */
                case "PG3002":
                    /*
                     * Tratamiento para error.
                     */
                case "PG3005":
                    /*
                     * Tratamiento para conexión deshabilitada.
                     */
                default:
                    /*
                     * Por ser un ejemplo, se muestra en una ventana
                     * emergente el código y mensaje de la respuesta
                     * del WSPG
                     */
                    echo "
                        <SCRIPT>
                            alert(\"$data_response->code: $data_response->message\");
                            location.href = 'index.php';
                        </SCRIPT>
                    ";
                    break;
            }
        }
        else
        {
          /*
           * Por ser un ejemplo, se muestra en una ventana emergente el
           * mensaje de error devuelto por el objeto oSoap.
           */
          echo "
              <SCRIPT>
                  alert('".$oSoap->getError()."');
                  location.href = 'index.php';
              </SCRIPT>
          ";
        }
    }
    else
    {
        /*
         * Por ser un ejemplo, se muestra en una ventana emergente el mensaje de
         * error devuelto por el objeto oSoap.
         */
        // echo "
        //     <SCRIPT>
        //         alert('".$err."');
        //         location.href = 'index.php';
        //     </SCRIPT>
        // ";
    }
  }

  /**
   * Make payment
   *
   * @param array $input
   *	An array as follows: array('firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email);
   *
   * @return JSON encoded string
   *  A string as follows:
   */
  public function getTransactionStatus($tokenTrans)
  {
    $UID = '3b5fe62169c492b285fab24d63334f1d';
    $WSK = '7c769929fa407504abf706b9ee337b2d';
    $WSPG = 'https://sandbox.pagadito.com/comercios/wspg/charges.php?wdsl';

		/*
     * Lo primero es crear el objeto nusoap_client, al que se le pasa como
     * parámetro la URL de Conexión definida en la constante WSPG
     */
    $oSoap = new nusoap_client($WSPG);

    $err = $oSoap->getError();
    if (!$err)
    {
        /*
         * Lo siguiente será consumir la operación 'connect', a la cual le
         * pasaremos el UID y WSK para solicitarle un token de conexión al WSPG.
         * Alternativamente le enviamos el formato en el que queremos que nos
         * responda el WSPG, en este ejemplo solicitamos el formato PHP.
         */
        $params = array(
            "uid"           => $UID,
            "wsk"           => $WSK,
            "format_return" => "php"
        );
        $response = $oSoap->call('connect', $params);
        $data_response = unserialize($response);

        if (!$oSoap->fault)
        {
					var_dump($data_response);
            /*
             * Debido a que el WSPG nos puede devolver diversos mensajes de
             * respuesta, validamos el tipo de mensaje que nos devuelve.
             */
            switch($data_response->code)
            {
                case "PG1001":
                    /*
                     * En caso de haber recibido un token exitosamente,
                     * procedemos a consumir la operación 'get_status'
                     * enviándole al WSPG el token de conexión y el token
                     * recibido por GET, que es el que consultaremos.
                     */
                    $token = $data_response->value;

                    $params = array(
                        "token"         => $token,
                        "token_trans"   => $tokenTrans,
                        "format_return" => "php"
                    );
                    $response = $oSoap->call('get_status', $params);
                    $data_response = unserialize($response);

										var_dump($data_response);

                    /*
                     * Debido a que el WSPG nos puede devolver diversos mensajes
                     * de respuesta, validamos el tipo de mensaje que nos
                     * devuelve.
                     */
                    switch($data_response->code)
                    {
                        case "PG1003":
                            /*
                             * En caso de haberse obtenido el estado de la
                             * transacción exitosamente, validamos el estado
                             * devuelto.
                             */
                            switch ($data_response->value["status"])
                            {
                                case "COMPLETED":
                                    /*
                                     * Tratamiento para una transacción exitosa.
                                     */
                                    // $msg = "Gracias por comprar en Mi Tienda Pagadito.<br /><br />Referencia: ".$data_response->value["reference"]."<br />Fecha: ".$data_response->value["date_trans"];
                                    return "Su pago fue procesado exitosamente, gracias por confirmar su participación al ECSL 2018.<br />El número de referencia de su pago es: ".$data_response->value["reference"]." con fecha: ".$data_response->value["date_trans"];
                                    break;
                                case "REGISTERED":
                                    /*
                                     * Tratamiento para una transacción aún en
                                     * proceso.
                                     */
                                    return "La transacci&oacute;n a&uacute;n est&aacute; en proceso, le confirmaremos vía correo electrónico cuando sea completada.";
                                    break;
                                case "FAILED":
                                    /*
                                     * Tratamiento para una transacción fallida.
                                     */
                                default:
                                    /*
                                     * Por ser un ejemplo, se muestra un mensaje
                                     * de error fijo.
                                     */
                                    $msg = "Lo sentimos, la compra no pudo realizarse.";
                                    break;
                            }
                            break;
                        case "PG2001":
                            /*
                             * Tratamiento para datos incompletos.
                             */
                        case "PG3002":
                            /*
                             * Tratamiento para error.
                             */
                        case "PG3003":
                            /*
                             * Tratamiento para transacción no registrada.
                             */
                        case "PG3007":
                            /*
                             * Tratamiento para acceso denegado.
                             */
                        default:
                            /*
                             * Por ser un ejemplo, se muestra un mensaje
                             * de error fijo.
                             */
                            $msg = "Lo sentimos, ha ocurrido un problema :/";
                            break;
                    }
                    break;
                case "PG2001":
                    /*
                     * Tratamiento para datos incompletos.
                     */
                case "PG3001":
                    /*
                     * Tratamiento para conexión dengada.
                     */
                case "PG3002":
                    /*
                     * Tratamiento para error.
                     */
                case "PG3005":
                    /*
                     * Tratamiento para conexión deshabilitada.
                     */
                default:
                    /*
                     * Por ser un ejemplo, se muestra en una ventana
                     * emergente el código y mensaje de la respuesta
                     * del WSPG
                     */
                    // echo "
                    //     <SCRIPT>
                    //         alert(\"$data_response->code: $data_response->message\");
                    //         location.href = 'index.php';
                    //     </SCRIPT>
                    // ";
										$msg = "$data_response->code: $data_response->message";
                    break;
            }
        }
        // else
        // {
        //     /*
        //      * Por ser un ejemplo, se muestra en una ventana emergente el
        //      * mensaje de error devuelto por el objeto oSoap.
        //      */
        //     echo "
        //         <SCRIPT>
        //             alert('".$oSoap->getError()."');
        //             location.href = 'index.php';
        //         </SCRIPT>
        //     ";
        // }
    }
    // else
    // {
    //     /*
    //      * Por ser un ejemplo, se muestra en una ventana emergente el mensaje de
    //      * error devuelto por el objeto oSoap.
    //      */
    //     echo "
    //         <SCRIPT>
    //             alert('".$err."');
    //             location.href = 'index.php';
    //         </SCRIPT>
    //     ";
    // }

		return false;
  }
}
