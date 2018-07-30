<?php
/**
 * @file
 * Description of the script.
 *
 * All ModuleName code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

namespace Mgallegos\ECSL2018\Repositories\RegistrationForm;

use Illuminate\Database\Eloquent\Model;

use Mgallegos\ECSL2018\RegistrationForm;

use Illuminate\Database\DatabaseManager;

use Illuminate\Database\Eloquent\Collection;

class EloquentRegistrationForm implements RegistrationFormInterface {

  /**
   * Eloquent Model
   *
   * @var Illuminate\Database\Eloquent\Model;
   *
   */
  protected $RegistrationForm;

  /**
   * DB
   *
   * @var Illuminate\Database\DatabaseManager
   *
   */
  protected $DB;

  /**
   * Database Connection
   *
   * @var string
   *
   */
  protected $databaseConnectionName;

  public function __construct(Model $RegistrationForm, DatabaseManager $DB, $databaseConnectionName)
  {
    $this->RegistrationForm = $RegistrationForm;

    $this->DB = $DB;

    $this->databaseConnectionName = $databaseConnectionName;

    $this->RegistrationForm->setConnection($databaseConnectionName);
  }

  /**
   * Get table name
   *
   * @return string
   */
  public function getTable()
  {
    return $this->RegistrationForm->getTable();
  }

  /**
   * Get a ... by ID
   *
   * @param  int $id
   *
   * @return Mgallegos\ECSL2018\RegistrationForm
   */
  public function byId($id, $databaseConnectionName = null)
  {
    if(empty($databaseConnectionName))
    {
      $databaseConnectionName = $this->databaseConnectionName;
    }

  	return $this->RegistrationForm->on($databaseConnectionName)->find($id);
  }

  /**
   * Retrieve ... by organization
   *
   * @param  int $id Organization id
   *
   * @return Illuminate\Database\Eloquent\Collection
   */
  public function byOrganization($id, $databaseConnectionName = null)
  {
    if(empty($databaseConnectionName))
    {
      $databaseConnectionName = $this->databaseConnectionName;
    }

    return $this->RegistrationForm->setConnection($databaseConnectionName)->where('organization_id', '=', $id)->get();
  }

  /**
   * Retrieve ... by user id
   *
   * @param  int $id Organization id
   *
   * @return Illuminate\Database\Eloquent\Collection
   */
  public function byUserId($id, $databaseConnectionName = null)
  {
    if(empty($databaseConnectionName))
    {
      $databaseConnectionName = $this->databaseConnectionName;
    }

    return $this->RegistrationForm->setConnection($databaseConnectionName)->where('user_id', '=', $id)->get();
  }

  /**
   * Retrieve SubTopic SubTopics by event and by organization
   *
   * @param  int $id Organization id
   *
   * @return Illuminate\Database\Eloquent\Collection
   */
  public function contactsByUserIdByEventIdAndByOrganizationId($userId, $eventId, $organizationId, $databaseConnectionName = null)
  {
    if(empty($databaseConnectionName))
    {
      $databaseConnectionName = $this->databaseConnectionName;
    }

    return new Collection(
      $this->DB->connection($databaseConnectionName)
        ->table('OCMS_User_Contact as uc')
        ->join('OCMS_User as u', 'uc.user_contact_id', '=', 'u.id' )
        ->join('ECSL_Registration_Form as rf', 'uc.user_contact_id', '=', 'rf.user_id')
        ->where('uc.user_id', '=', $userId)
        ->where('uc.event_id', '=', $eventId)
        ->where('uc.organization_id', '=', $organizationId)
        ->distinct()
        ->get(
          array(
            'u.id',
            'u.firstname',
            'u.lastname',
            'u.email',
            'rf.country',
            'rf.institution'
          )
        )
    );
  }

  /**
   * Retrieve contact information by organization
   *
   * @param  int $id Organization id
   *
   * @return Illuminate\Database\Eloquent\Collection
   */
  public function participantsByOrganizationId($organizationId, $databaseConnectionName = null)
  {
    if(empty($databaseConnectionName))
    {
      $databaseConnectionName = $this->databaseConnectionName;
    }

    return new Collection(
      $this->DB->connection($databaseConnectionName)
        ->table('OCMS_User as u')
        ->join('ECSL_Registration_Form as rf', 'u.id', '=', 'rf.user_id')
        ->where('u.organization_id', '=', $organizationId)
        ->where('rf.is_photo_visible', '=', 1)
        ->get(
          array(
            'u.id',
            'u.firstname',
            'u.lastname',
            'u.email',
            'rf.country',
            'rf.institution'
          )
        )
    );
  }

  /**
   * Retrieve gender stats
   *
   * @param  int $id Organization id
   *
   * @return Illuminate\Database\Eloquent\Collection
   */
  public function genderStats($databaseConnectionName = null)
  {
    if(empty($databaseConnectionName))
    {
      $databaseConnectionName = $this->databaseConnectionName;
    }

    return new Collection(
      $this->DB->connection($databaseConnectionName)
        ->table('ECSL_Registration_Form as rf')
        ->join('OCMS_Payment as p', 'rf.user_id', '=', 'p.user_id' )
        ->where('rf.is_gender_visible', '=', 1)
        ->where('rf.is_general_information_visible', '=', 1)
        ->where('p.status', '=', 'X')
        ->groupBy('genero')
        ->get(
          array(
            $this->DB->raw('
              CASE
        			WHEN custom_gender IS NOT NULL THEN custom_gender
              ELSE gender
              END AS genero
            '),
            $this->DB->raw('COUNT(1) AS value')
          )
        )
    );
  }

  /**
   * Retrieve country stats
   *
   * @param  int $id Organization id
   *
   * @return Illuminate\Database\Eloquent\Collection
   */
  public function countriesStats($databaseConnectionName = null)
  {
    if(empty($databaseConnectionName))
    {
      $databaseConnectionName = $this->databaseConnectionName;
    }

    return new Collection(
      $this->DB->connection($databaseConnectionName)
        ->table('ECSL_Registration_Form as rf')
        ->join('OCMS_Payment as p', 'rf.user_id', '=', 'p.user_id' )
        ->where('rf.is_gender_visible', '=', 1)
        ->where('rf.is_general_information_visible', '=', 1)
        ->where('p.status', '=', 'X')
        ->groupBy('country')
        ->get(
          array(
            'country',
            $this->DB->raw('COUNT(1) AS value')
          )
        )
    );
  }

  /**
   * Retrieve country stats
   *
   * @param  int $id Organization id
   *
   * @return Illuminate\Database\Eloquent\Collection
   */
  public function institutionsStats($databaseConnectionName = null)
  {
    if(empty($databaseConnectionName))
    {
      $databaseConnectionName = $this->databaseConnectionName;
    }

    return new Collection(
      $this->DB->connection($databaseConnectionName)
        ->table('ECSL_Registration_Form as rf')
        ->join('OCMS_Payment as p', 'rf.user_id', '=', 'p.user_id' )
        // ->where('rf.is_gender_visible', '=', 1)
        ->where('rf.is_general_information_visible', '=', 1)
        ->where('p.status', '=', 'X')
        ->whereNotNull('institution')
        ->groupBy('institution')
        ->get(
          array(
            'institution',
            $this->DB->raw('COUNT(1) AS value')
          )
        )
    );
  }

  /**
   * Create a new ...
   *
   * @param array $data
   * 	An array as follows: array('field0'=>$field0, 'field1'=>$field1
   *                            );
   *
   * @return boolean
   */
  public function create(array $data, $databaseConnectionName = null)
  {
    if(empty($databaseConnectionName))
    {
      $databaseConnectionName = $this->databaseConnectionName;
    }

    $RegistrationForm = new RegistrationForm();
    $RegistrationForm->setConnection($databaseConnectionName);
    $RegistrationForm->fill($data)->save();

    return $RegistrationForm;
  }

  /**
   * Update an existing ...
   *
   * @param array $data
   * 	An array as follows: array('field0'=>$field0, 'field1'=>$field1
   *                            );
   *
   * @param Mgallegos\ECSL2018\RegistrationForm $RegistrationForm
   *
   * @return boolean
   */
  public function update(array $data, $RegistrationForm = null, $databaseConnectionName = null)
  {
    if(empty($RegistrationForm))
    {
      $RegistrationForm = $this->byId($data['id'], $databaseConnectionName);
    }

    foreach ($data as $key => $value)
    {
      $RegistrationForm->$key = $value;
    }

    $RegistrationForm->save();

    return $RegistrationForm;
  }

  /**
   * Delete existing ... (soft delete)
   *
   * @param array $data
   * 	An array as follows: array($id0, $id1,…);
   * @return boolean
   */
  public function delete(array $data, $databaseConnectionName = null)
  {
    foreach ($data as $key => $id)
    {
      $RegistrationForm = $this->byId($id, $databaseConnectionName);
      $RegistrationForm->delete();
    }
    // $this->Account->destroy($data);

    return true;
  }

}
