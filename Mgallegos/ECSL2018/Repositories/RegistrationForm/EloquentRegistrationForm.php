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

class EloquentRegistrationForm implements RegistrationFormInterface {

  /**
   * Eloquent Model
   *
   * @var Illuminate\Database\Eloquent\Model;
   *
   */
  protected $RegistrationForm;

  /**
   * Database Connection
   *
   * @var string
   *
   */
  protected $databaseConnectionName;

  public function __construct(Model $RegistrationForm, $databaseConnectionName)
  {
      $this->RegistrationForm = $RegistrationForm;

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
