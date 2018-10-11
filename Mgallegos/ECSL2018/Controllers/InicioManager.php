<?php
/**
 * @file
 * Initial Acounting Setup Controller.
 *
 * All ECSL2018 code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

namespace Mgallegos\ECSL2018\Controllers;

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

use Mgallegos\DecimaOpenCms\OpenCms\Services\OpenCmsManagement\OpenCmsManagementInterface;

use Illuminate\Foundation\Application;

class InicioManager extends Controller {

	/**
	 * Client Manager Service
	 *
	 * @var Mgallegos\DecimaSale\Sale\Services\ClientManagement\ClientManagementInterface
	 *
	 */
	protected $ClientManagerService;

	/**
	 * Open Cms Manager Service
	 *
	 * @var Mgallegos\DecimaOpenCms\OpenCms\Services\OpenCmsManagement\OpenCmsManagementInterface;
	 *
	 */
	protected $OpenCmsManagerService;

	/**
	 * View
	 *
	 * @var Illuminate\Foundation\Application
	 *
	 */
	protected $App;

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

	public function __construct(ClientManagementInterface $ClientManagerService, Factory $View, Request $Input, SessionManager $Session, Filesystem $File, Excel $Excel, DatabaseManager $DB, Mailer $Mailer, UrlGenerator $Url, Application $App)
	{
		$this->ClientManagerService = $ClientManagerService;

		$this->View = $View;

		$this->Input = $Input;

		$this->Session = $Session;

		$this->File = $File;

		$this->Excel = $Excel;

		$this->DB = $DB;

		$this->Mailer = $Mailer;

		$this->Url = $Url;

		$this->App = $App;

		$this->OpenCmsManagerService = $App->make('Ecsl2018OpenCmsManagementInterface');

	}

	public function getIndex()
	{
		return $this->View->make('ecsl-2018::inicio-cierre')
			->with('usersData', $this->OpenCmsManagerService->getUsersRegistrationData())
			->with('participants', $this->OpenCmsManagerService->getParticipantsInformation(false));
	}
}
