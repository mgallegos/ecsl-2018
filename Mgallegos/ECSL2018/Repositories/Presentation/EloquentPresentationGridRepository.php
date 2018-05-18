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
			->join('OCMS_Subtopic AS st', 'p.subtopic_id', '=', 'st.id')
      ->leftJoin('OCMS_Space as s', 'p.space_id', '=', 's.id')
      ->join('OCMS_User as u', 'p.user_id', '=', 'u.id')
      ->where('p.event_id', '=', 1);

		$this->visibleColumns = array(
			'p.id AS pon_id',
      'p.name As pon_name',
      'p.description As pon_description',
      'p.type As pon_type',
      'p.duration As pon_duration',
      'p.is_approved As pon_is_approved',
			'st.id As pon_subtopic_id',
      'st.name As pon_subtopic_label',
      // 's.name As pon_space',
		);

		$this->orderBy = array(array('pon_id', 'asc'));

		// $this->treeGrid = true;

		// $this->parentColumn = 'parent_id';

		// $this->leafColumn = 'is_leaf';
	}

}
