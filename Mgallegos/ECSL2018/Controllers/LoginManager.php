<?php
/**
 * @file
 * Initial Acounting Setup Controller.
 *
 * All ECSL2018 code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

namespace Mgallegos\ECSL2018\Controllers;

use Mgallegos\DecimaCms\Cms\Services\BlogManagement\BlogManagementInterface;

use Mgallegos\DecimaCms\Cms\Services\SettingManagement\SettingManagementInterface;

use Mgallegos\DecimaSale\Sale\Services\ClientManagement\ClientManagementInterface;

use Illuminate\Session\SessionManager;

use Illuminate\Http\Request;

use Illuminate\View\Factory;

use Illuminate\Filesystem\Filesystem;

use Illuminate\Database\DatabaseManager;

use Illuminate\Database\Eloquent\Collection;

use Illuminate\Routing\UrlGenerator;

use Illuminate\Mail\Mailer;

use Maatwebsite\Excel\Excel;

use Mgallegos\LaravelJqgrid\Facades\GridEncoder;

use App\Http\Controllers\Controller;

class LoginManager extends Controller {

	/**
	 * Blog Manager Service
	 *
	 * @var Mgallegos\DecimaCms\Cms\Services\BlogManagement\BlogManagementInterface
	 *
	 */
	protected $BlogManagerService;

	/**
	 * Setting Manager Service
	 *
	 * @var Mgallegos\DecimaCms\Cms\Services\SettingManagement\SettingManagementInterface
	 *
	 */
	protected $SettingManagerService;

	/**
	 * Client Manager Service
	 *
	 * @var Mgallegos\DecimaSale\Sale\Services\ClientManagement\ClientManagementInterface
	 *
	 */
	protected $ClientManagerService;

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
	 * File
	 *
	 * @var Illuminate\Filesystem\Filesystem
	 *
	 */
	protected $File;

	/**
	* Excel
	*
	* @var Maatwebsite\Excel\Excel
	*/
	protected $Excel;

	/**
	 * Mailer
	 *
	 * @var Illuminate\Mail\Mailer
	 */
	protected $Mailer;

	/**
	 * The URL generator instance
	 *
	 * @var \Illuminate\Routing\UrlGenerator
	 *
	 */
	protected $Url;

	public function __construct(BlogManagementInterface $BlogManagerService, SettingManagementInterface $SettingManagerService, ClientManagementInterface $ClientManagerService, Factory $View, Request $Input, SessionManager $Session, Filesystem $File, Excel $Excel, DatabaseManager $DB, Mailer $Mailer, UrlGenerator $Url)
	{
		$this->BlogManagerService = $BlogManagerService;

		$this->SettingManagerService = $SettingManagerService;

		$this->ClientManagerService = $ClientManagerService;

		$this->View = $View;

		$this->Input = $Input;

		$this->Session = $Session;

		$this->File = $File;

		$this->Excel = $Excel;

		$this->DB = $DB;

		$this->Mailer = $Mailer;

		$this->Url = $Url;

		/*8 antes de dar push*/
		// $this->OrganizationId = 1;
		$this->OrganizationId = 8;
	}

	public function getIndex()
	{
		return $this->View->make('ecsl-2018::login')
			->with('eventUrl', $this->Url->to('cms/sfd2017'))
			->with('prefix', 'slsv-login-');
	}
}
