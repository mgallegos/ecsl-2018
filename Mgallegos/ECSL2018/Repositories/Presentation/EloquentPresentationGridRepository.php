<?php
/**
 * @file
 * Description of the script.
 *
 * All ModuleName code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

namespace Mgallegos\ECSL2018\Repositories\Presentation;

use App\Kwaai\Security\Services\AuthenticationManagement\AuthenticationManagementInterface;

use Illuminate\Database\DatabaseManager;

use Mgallegos\LaravelJqgrid\Repositories\EloquentRepositoryAbstract;

use Illuminate\Translation\Translator;

class EloquentPresentationGridRepository extends EloquentRepositoryAbstract {

	public function __construct(DatabaseManager $DB)
	{
		// $this->DB = $DB;
		// $this->DB->connection()->enableQueryLog();

		$this->Database = $DB->connection('ecsl2018')
			->table('OCMS_Presentation AS p')
			->join('OCMS_Event AS e', 'p.event_id', '=', 'e.id')
      ->leftJoin('OCMS_Space as s', 'p.space_id', '=', 's.id')
      ->join('OCMS_User as u', 'p.user_id', '=', 'u.id');

		$this->Database = $DB->connection('ecsl2018')
			->table('PURCH_Order AS p');

		$this->visibleColumns = array(
			'p.id AS ocms_pm_id',
      'p.name As ocms_pm_name',
      'p.description As ocms_pm_description',
      'p.type As ocms_pm_type',
      'p.duration As ocms_pm_duration',
      'p.is_approved As ocms_pm_is_approved',
      // 'e.id As ocms_pm_event_id',
      // 'e.name As ocms_pm_event_label',
      's.name As ocms_pm_space',
      // 'u.id As ocms_pm_user_id',
      // $DB->raw('CONCAT(u.firstname, " " ,u.lastname) AS ocms_pm_user_label'),
		);

		$this->visibleColumns = array('id');

		$this->orderBy = array(array('ocms_pm_id', 'asc'));
		$this->orderBy = array(array('id', 'asc'));

		// $this->treeGrid = true;

		// $this->parentColumn = 'parent_id';

		// $this->leafColumn = 'is_leaf';
	}

}
