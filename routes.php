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

	// Route::get('/cms/ecsl/logistica', function()
	Route::get('/cms/logistica', function()
	{
		return View::make('ecsl-2018::logistica');
	});

	// Route::get('/cms/ecsl/ejes-tematicos', function()
	Route::get('/cms/ejes-tematicos', function()
	{
		return View::make('ecsl-2018::ejes-tematicos');
	});

	// Route::get('/cms/ecsl/faq', function()
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

	Route::get('/cms/intinerario-de-evento', function()
	{
		return View::make('ecsl-2018::intinerario');
	});

	Route::post('/cms/presentaciones', function()
	{
		$app = $this->app;

    return GridEncoder::encodeRequestedData(new \Mgallegos\ECSL2018\Repositories\Presentation\EloquentPresentationGridRepository($app['db']), Request::all());
	});

	Route::controller('/cms/dashboard', 'Mgallegos\ECSL2018\Controllers\OpenCmsManager');
	Route::controller('/cms/inicio', 'Mgallegos\ECSL2018\Controllers\InicioManager');

	// Route::controller('/cms/ecsl-2018', 'Mgallegos\ECSL2018\Controllers\GestorCms');
};

Route::group(['domain' => 'localhost'], $ecslsv);
Route::group(['domain' => 'app.decimaerp.com'], $ecslsv);
Route::group(['domain' => 'ecsl2018.softwarelibre.ca'], $ecslsv);
