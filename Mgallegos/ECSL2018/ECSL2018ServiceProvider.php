<?php namespace Mgallegos\ECSL2018;

use Illuminate\Support\ServiceProvider;

class ECSL2018ServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	* Bootstrap any application services.
	*
	* @return void
	*/
	public function boot()
	{
		include __DIR__.'/../../routes.php';

		$this->loadViewsFrom(__DIR__.'/../../views', 'ecsl-2018');

		$this->loadTranslationsFrom(__DIR__.'/../../lang', 'ecsl-2018');

		$this->publishes([
				__DIR__ . '/../../config/config.php' => config_path('ecsl-2018-general.php'),
		], 'config');

		$this->mergeConfigFrom(
				__DIR__ . '/../../config/config.php', 'ecsl-2018-general'
		);

		$this->publishes([
				__DIR__ . '/../../config/journal.php' => config_path('ecsl-2018-journal.php'),
		], 'config');

		$this->mergeConfigFrom(
				__DIR__ . '/../../config/journal.php', 'ecsl-2018-journal'
		);

		$this->publishes([
    __DIR__.'/../../migrations/' => database_path('/migrations')
		], 'migrations');

		$this->publishes([
    __DIR__.'/../../assets/' => public_path('/mgallegos/ecsl-2018')
	], 'public');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
