<?php
// var_dump('Hola decima web');
/**
 * @file
 * Application Routes.
 *
 * All ECSL2018 code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

/*
|--------------------------------------------------------------------------
| Package Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//https://laravel.com/docs/5.1/controllers

// var_dump(Request::getHost());

$ecslsv =  function ()
{
	Route::get('/ecsltest', function()
	{
		// return Redirect::to('cms/dashboard')->with('ecsl2018login', true);
		// return Redirect::to('cms/dashboard')->with('ecsl2018registro', true);

		return Redirect::to('cms/dashboard')
			->with('ecsl2018pago', true)
			->with('token', Request::get('token', ''))
			->with('ern', Request::get('ern', ''));
	});

	Route::get('/cms/logistica', function()
	{
		return View::make('ecsl-2018::logistica');
	});

	Route::get('/cms/inicio-cierre', function()
	{
		$app = $this->app;
		$OpenCmsManagerService = $app->make('Ecsl2018OpenCmsManagementInterface');

		return View::make('ecsl-2018::inicio-cierre')
			->with('participants', $OpenCmsManagerService->getParticipantsInformation());
	});

	Route::get('/cms/ejes-tematicos', function()
	{
		return View::make('ecsl-2018::ejes-tematicos');
	});

	Route::get('/cms/becas', function()
	{
		return View::make('ecsl-2018::becas');
	});

	Route::get('/cms/faq', function()
	{
		return View::make('ecsl-2018::faq');
	});

	// Route::get('/cms/ecsl/eventos-anteriores', function()
	Route::get('/cms/eventos-anteriores', function()
	{
		return View::make('ecsl-2018::eventos-anteriores');
	});

	Route::get('/cms/carta-invitacion', function()
	{
		return View::make('ecsl-2018::carta-invitacion-pdf');
	});

	Route::get('/cms/itinerario', function()
	{
		return View::make('ecsl-2018::itinerario');
	});

	Route::get('/cms/fotografias', function()
	{
		return View::make('ecsl-2018::fotografias');
	});

	Route::get('/cms/ponencias', function()
	{
		return View::make('ecsl-2018::ponencias');
	});

	Route::get('/cms/estadisticas', function()
	{
		$app = $this->app;
		$OpenCmsManagerService = $app->make('Ecsl2018OpenCmsManagementInterface');

		return View::make('ecsl-2018::estadisticas')
			->with('charts', true)
			->with('genderStats', $OpenCmsManagerService->getGenderStats())
			->with('countriesStats', $OpenCmsManagerService->getCountriesStats())
			->with('institutionsStats', $OpenCmsManagerService->getInstitutionsStats());
	});

	Route::get('/cms/agenda/{id}', function($id)
	{
		return Redirect::to('cms/agenda')->with('presentationId', $id);
	});

	Route::get('/cms/agenda', function()
	{
		$app = $this->app;
		$presentationId = Session::get('presentationId', '');
		$PresentationManagerService = $app->make('Mgallegos\DecimaOpenCms\OpenCms\Services\PresentationManagement\PresentationManagementInterface');
		$OpenCmsManagerService = $app->make('Ecsl2018OpenCmsManagementInterface');
		$presentationTitle = $presentationDescription = '';

		if(!empty($presentationId))
		{
			$Presentation = $PresentationManagerService->getPresentation($presentationId, 'ecsl2018');
			$presentationTitle = $Presentation->name;
			$presentationDescription = $Presentation->description;
		}
		// var_dump($PresentationManagerService->getPresentationsWithSpeaker(1, 15, true, 'ecsl2018', false));
		// var_dump($PresentationManagerService->getPresentationsWithSpeakerAndSchedule(1, 15, true, 'ecsl2018', false));

		return View::make('ecsl-2018::agenda')
			->with('presentationId', $presentationId)
			->with('ogTitle', $presentationTitle)
			->with('ogDescription', $presentationDescription)
			->with('presentationId', $presentationId)
			->with('usersData', $OpenCmsManagerService->getUsersRegistrationData())
			// ->with('presentations', $PresentationManagerService->getPresentationsWithSpeaker(1, 15, true, 'ecsl2018', false))
			->with('presentationsBySchedule', $PresentationManagerService->getPresentationsWithSpeakerAndSchedule(1, 15, true, 'ecsl2018', false));
	});

	Route::post('/cms/presentaciones', function()
	{
		$app = $this->app;

    return GridEncoder::encodeRequestedData(new \Mgallegos\ECSL2018\Repositories\Presentation\EloquentPresentationGridRepository($app['db']), Request::all());
	});

	Route::controller('/cms/dashboard', 'Mgallegos\ECSL2018\Controllers\OpenCmsManager');
	Route::controller('/cms/inicio', 'Mgallegos\ECSL2018\Controllers\InicioManager');

	Route::post('/cms/get-users', function()
	{
		$app = $this->app;

		$OpenCmsManagerService = $app->make('Ecsl2018OpenCmsManagementInterface');

		return $OpenCmsManagerService->saoh01(Request::json()->all());
	});

	Route::post('/cms/post-card-touch', function()
	{
		$app = $this->app;

		$OpenCmsManagerService = $app->make('Ecsl2018OpenCmsManagementInterface');

		return $OpenCmsManagerService->saoh02(Request::json()->all());
	});

	Route::post('/cms/post-share-info', function()
	{
		$app = $this->app;

		$OpenCmsManagerService = $app->make('Ecsl2018OpenCmsManagementInterface');

		return $OpenCmsManagerService->saoh03(Request::json()->all());
	});

	// Route::controller('/cms/ecsl-2018', 'Mgallegos\ECSL2018\Controllers\GestorCms');
};

Route::group(['domain' => 'localhost'], $ecslsv);
Route::group(['domain' => 'app.decimaerp.com'], $ecslsv);
Route::group(['domain' => 'ecsl2018.softwarelibre.ca'], $ecslsv);
