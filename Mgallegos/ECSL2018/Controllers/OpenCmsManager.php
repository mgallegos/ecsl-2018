<?php
/**
 * @file
 * Account Manager Controller.
 *
 * All ECSL2018 code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */
namespace Mgallegos\ECSL2018\Controllers;

use Mgallegos\DecimaOpenCms\OpenCms\Services\PresentationManagement\PresentationManagementInterface;

use Illuminate\Foundation\Application;

use Illuminate\Session\SessionManager;

use Illuminate\Http\Request;

use Illuminate\View\Factory;

use Symfony\Component\Translation\TranslatorInterface;

use App\Http\Controllers\Controller;

class OpenCmsManager extends Controller {

	/**
	 * Account Manager Service
	 *
	 * @var Mgallegos\DecimaOpenCms\OpenCms\Services\OpenCmsManagement\OpenCmsManagementInterface
	 *
	 */
	protected $OpenCmsManagerService;


	/**
	 * View
	 *
	 * @var Illuminate\Foundation\Application
	 *
	 */
	protected $Application;

	/**
	 * View
	 *
	 * @var Illuminate\View\Factory
	 *
	 */
	protected $View;

	/**
	 * Input
	 *
	 * @var Illuminate\Http\Request
	 *
	 */
	protected $Input;

	/**
	 * Session
	 *
	 * @var Illuminate\Session\SessionManager
	 *
	 */
	protected $Session;

	/**
	 * Laravel Translator instance
	 *
	 * @var \Symfony\Component\Translation\TranslatorInterface
	 *
	 */
	protected $Lang;

	public function __construct(
		Application $App,
		Factory $View,
		Request $Input,
		SessionManager $Session,
		TranslatorInterface $Lang
	)
	{
		$this->App = $App;

		$this->OpenCmsManagerService = $this->App->make('Ecsl2018OpenCmsManagementInterface');

		$this->View = $View;

		$this->Input = $Input;

		$this->Session = $Session;

		$this->Lang = $Lang;
	}

	public function getIndex()
	{
		$redirectToLogin = $this->Session->get('ecsl2018login', false);
		$redirectToRegistro = $this->Session->get('ecsl2018registro', false);
		$redirectToPago = false;
		$cmsLoggedUser = $this->OpenCmsManagerService->getSessionLoggedUser();

		if(empty($cmsLoggedUser))
		{
			$guestUserDisabledCssClass = 'disabled';
			$guestUserDisabledInputAttribute = 'disabled="disabled"';
			$loggedUserDisabledCssClass = '';
			$loggedUserDisabledInputAttribute = '';
			$registroLabel = 'Registrarse';
			$cmsLoggedUser = array();
		}
		else
		{
			$redirectToLogin = false;
			$redirectToRegistro = true;
			$guestUserDisabledCssClass = '';
			$guestUserDisabledInputAttribute = '';
			$loggedUserDisabledCssClass = 'disabled';
			$loggedUserDisabledInputAttribute = 'disabled="disabled"';
			$registroLabel = 'Actualizar mis datos';
			$cmsLoggedUser['birth_date'] = \Carbon\Carbon::createFromFormat('Y-m-d', $cmsLoggedUser['birth_date'])->format($this->Lang->get('form.phpShortDateFormat'));
		}

		$token = $this->Session->get('token', '');
		$ern = $this->Session->get('ern', '');
		$transactionStatusMessage = false;

		if(!empty($token))
		{
			$redirectToLogin = false;
			$redirectToRegistro = false;
			$redirectToPago = true;
			$transactionStatusMessage = $this->OpenCmsManagerService->getTransactionStatus($token);
		}

		return $this->View->make('ecsl-2018::dashboard')
			->with('login', $redirectToLogin)
			->with('registro', $redirectToRegistro)
			->with('pago', $redirectToPago)
			->with('guestUserDisabledCssClass', $guestUserDisabledCssClass)
			->with('guestUserDisabledInputAttribute', $guestUserDisabledInputAttribute)
			->with('loggedUserDisabledCssClass', $loggedUserDisabledCssClass)
			->with('loggedUserDisabledInputAttribute', $loggedUserDisabledInputAttribute)
			->with('cmsLoggedUser', $cmsLoggedUser)
			->with('registroLabel', $registroLabel)
			->with('token', $token)
			->with('ern', $ern)
			->with('transactionStatusMessage', $transactionStatusMessage)
			->with('prefix', 'pay-')
			->with('appInfo', array('id' => 'dashboard'))
			->with('status', 'En revisión')
			->with('lugares', array(
				'Aeropuerto Internacional de El Salvador "Monseñor Oscar Arnulfo Romero"' => 'Aeropuerto Internacional de El Salvador "Monseñor Oscar Arnulfo Romero"',
				'Puerto Bus' => 'Puerto Bus',
				'Pullmantur San Benito' => 'Pullmantur San Benito',
				'Tica Bus Terminal San Benito' => 'Tica Bus Terminal San Benito',
				'Terminal Platinum Sheraton Presidente' => 'Terminal Platinum Sheraton Presidente',
				'Transportes El Sol Terminal San Benito' => 'Transportes El Sol Terminal San Benito')
			);
	}

	/**
	 * Handle a POST request for presentation grid data.
	 *
	 * @return Response
	 */
	public function postGridData()
	{
		return $this->PresentationManagerService->getGridData( $this->Input->all() );
	}

	/**
	 * Handle a POST request for user registration.
	 *
	 * @return Response
	 */
	public function postCreate()
	{
		return $this->OpenCmsManagerService->create( $this->Input->json()->all() );
	}
	/**
	 * Handle a POST request for user registration.
	 *
	 * @return Response
	 */
	public function postUpdate()
	{
		return $this->OpenCmsManagerService->update( $this->Input->json()->all() );
	}

	/**
	 * Handle a POST request for user login.
	 *
	 * @return Response
	 */
	public function postLogin()
	{
		return $this->OpenCmsManagerService->attemptLogin( $this->Input->json()->all() );
	}

	/**
	 * Handle a POST request for user login.
	 *
	 * @return Response
	 */
	public function postLogout()
	{
		return $this->OpenCmsManagerService->attemptLogout();
	}

	/**
	 * Handle a POST request for a payment.
	 *
	 * @return Response
	 */
	public function postPayment()
	{
		return $this->OpenCmsManagerService->attemptPayment( $this->Input->all() );
	}
}
