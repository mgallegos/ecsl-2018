<?php
/**
 * @file
 * Description of the script.
 *
 * All ModuleName code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

namespace Mgallegos\ECSL2018\Repositories\CardTouch;

use Illuminate\Database\Eloquent\Model;

use Mgallegos\ECSL2018\CardTouch;

class EloquentCardTouch implements CardTouchInterface {

  /**
   * Eloquent Model
   *
   * @var Illuminate\Database\Eloquent\Model;
   *
   */
  protected $CardTouch;

  /**
   * Database Connection
   *
   * @var string
   *
   */
  protected $databaseConnectionName;

  public function __construct(Model $CardTouch, $databaseConnectionName)
  {
      $this->CardTouch = $CardTouch;

      $this->databaseConnectionName = $databaseConnectionName;

      $this->CardTouch->setConnection($databaseConnectionName);
  }

  /**
   * Get table name
   *
   * @return string
   */
  public function getTable()
  {
    return $this->CardTouch->getTable();
  }

  /**
   * Get a ... by ID
   *
   * @param  int $id
   *
   * @return Mgallegos\ECSL2018\CardTouch
   */
  public function byId($id, $databaseConnectionName = null)
  {
    if(empty($databaseConnectionName))
    {
      $databaseConnectionName = $this->databaseConnectionName;
    }

  	return $this->CardTouch->on($databaseConnectionName)->find($id);
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

    return $this->CardTouch->setConnection($databaseConnectionName)->where('organization_id', '=', $id)->get();
  }

  /**
   * Retrieve ... by user id
   *
   * @param  int $id Organization id
   *
   * @return Illuminate\Database\Eloquent\Collection
   */
  public function byReaderId($id, $databaseConnectionName = null)
  {
    if(empty($databaseConnectionName))
    {
      $databaseConnectionName = $this->databaseConnectionName;
    }

    return $this->CardTouch->setConnection($databaseConnectionName)->where('reader_id', '=', $id)->get();
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

    $CardTouch = new CardTouch();
    $CardTouch->setConnection($databaseConnectionName);
    $CardTouch->fill($data)->save();

    return $CardTouch;
  }

  /**
   * Update an existing ...
   *
   * @param array $data
   * 	An array as follows: array('field0'=>$field0, 'field1'=>$field1
   *                            );
   *
   * @param Mgallegos\ECSL2018\CardTouch $CardTouch
   *
   * @return boolean
   */
  public function update(array $data, $CardTouch = null, $databaseConnectionName = null)
  {
    if(empty($CardTouch))
    {
      $CardTouch = $this->byId($data['id'], $databaseConnectionName);
    }

    foreach ($data as $key => $value)
    {
      $CardTouch->$key = $value;
    }

    $CardTouch->save();

    return $CardTouch;
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
      $CardTouch = $this->byId($id, $databaseConnectionName);
      $CardTouch->delete();
    }
    // $this->Account->destroy($data);

    return true;
  }

}
