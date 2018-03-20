<?php
/**
 * @file
 * Account Manager Controller.
 *
 * All ECSL2018 code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */
namespace Mgallegos\ECSL2018\Controllers;

use Illuminate\Foundation\Application;

use Illuminate\Session\SessionManager;

use Illuminate\Http\Request;

use Illuminate\View\Factory;

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

	public function __construct(Application $App, Factory $View, Request $Input, SessionManager $Session)
	{
		$this->App = $App;

		$this->OpenCmsManagerService = $this->App->make('Ecsl2018OpenCmsManagementInterface');

		$this->View = $View;

		$this->Input = $Input;

		$this->Session = $Session;
	}

	public function getIndex()
	{
		return $this->View->make('ecsl-2018::dashboard')
			->with('login', $this->Session->get('ecsl2018login', false))
			->with('registro', $this->Session->get('ecsl2018registro', false));
	}

	/**
	 * Handle a POST request for user registration.
	 *
	 * @return Response
	 */
	public function postRegistration()
	{
		return $this->OpenCmsManagerService->create( $this->Input->json()->all() );
	}

	/**
	 * Handle a POST request for user login.
	 *
	 * @return Response
	 */
	public function postLogin()
	{
		return $this->OpenCmsManagerService->loginAttempt( $this->Input->json()->all() );
	}
}
