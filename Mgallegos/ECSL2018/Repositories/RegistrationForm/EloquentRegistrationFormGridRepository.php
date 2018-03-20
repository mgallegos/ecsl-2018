<?php
/**
 * @file
 * Description of the script.
 *
 * All ModuleName code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

namespace Mgallegos\ECSL2018\Repositories\SlsvRegistrationForm;

use App\Kwaai\Security\Services\AuthenticationManagement\AuthenticationManagementInterface;

use Illuminate\Database\DatabaseManager;

use Mgallegos\LaravelJqgrid\Repositories\EloquentRepositoryAbstract;

use Illuminate\Translation\Translator;

class EloquentRegistrationFormGridRepository extends EloquentRepositoryAbstract {

	public function __construct(DatabaseManager $DB, AuthenticationManagementInterface $AuthenticationManager)
	{
		// $this->DB = $DB;
		// $this->DB->connection()->enableQueryLog();

		$this->Database = $DB->connection($AuthenticationManager->getCurrentUserOrganizationConnection())
								->table('CMS_ECSL_Registration_Form AS t1')
								->leftJoin('CMS_Author AS a', 'a.id', '=', 't1.author_id')
								->where('t1.organization_id', '=', $AuthenticationManager->getCurrentUserOrganizationId())
								->whereNull('t1.deleted_at');

		$this->visibleColumns = array('t1.id AS cms_bm_id',
																	't1.date AS cms_bm_date',
																	't1.tittle AS cms_bm_tittle',
																	't1.summary AS cms_bm_summary',
																	't1.status AS cms_bm_status',
																	't1.header_image_url AS cms_bm_header_image_url',
																	't1.content AS cms_bm_content',
																	't1.author_id AS cms_bm_author_id',
																	't1.status AS cms_bm_status',
																	'a.name AS cms_bm_author_label',
																	't1.type AS cms_bm_type',
																	't1.video_url AS cms_bm_video_url',
																	't1.SlsvRegistrationForm_url AS cms_m_SlsvRegistrationForm_url',
																	't1.preview_image_url AS cms_bm_preview_image_url'); /* $DB->raw('CASE t1.field0 WHEN 1 THEN 0 ELSE 1 END AS module_app_field0'), */

		$this->orderBy = array(array('t1.id', 'asc'));  //'module_app_id', 'asc'

		// $this->treeGrid = true;

		// $this->parentColumn = 'parent_id';

		// $this->leafColumn = 'is_leaf';
	}

}
