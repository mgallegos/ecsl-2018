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

		$this->registerRegistrationFormInterface();

		$this->registerOpenCmsManagementInterface();
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
	* Register a RegistrationForm interface instance.
	*
	* @return void
	*/
	protected function registerRegistrationFormInterface()
	{
		$this->app->bind('Ecsl2018RegistrationFormInterface', function($app)
		{
			$AuthenticationManager = $app->make('App\Kwaai\Security\Services\AuthenticationManagement\AuthenticationManagementInterface');

			return new \Mgallegos\DecimaOpenCms\OpenCms\Repositories\RegistrationForm\EloquentRegistrationForm( new \Mgallegos\ECSL2018\RegistrationForm(), 'ecsl2018');
		});
	}

	/**
	 * Register the authenticator instance.
	 *
	 * @return void
	 */
	protected function registerOpenCmsManagementInterface()
	{
		$this->app->bind('Ecsl2018OpenCmsManagementInterface', function($app)
		{
			return new \Mgallegos\DecimaOpenCms\OpenCms\Services\OpenCmsManagement\OpenCmsManager(
					$app->make('App\Kwaai\Security\Services\JournalManagement\JournalManagementInterface'),
					$app->make('App\Kwaai\Security\Repositories\Journal\JournalInterface'),
					$app->make('App\Kwaai\Organization\Repositories\Organization\OrganizationInterface'),
					$app->make('App\Kwaai\System\Repositories\Currency\CurrencyInterface'),
					$app->make('Mgallegos\DecimaOpenCms\OpenCms\Repositories\User\UserInterface'),
					$app->make('Ecsl2018RegistrationFormInterface'),
					$app['translator'],
					$app['url'],
					$app['redirect'],
					$app['cookie'],
					$app['request'],
					$app['config'],
					$app['auth.password'],
					$app['hash'],
					$app['session'],
					$app['validator'],
					$app['log'],
					15,//organization id
					'ecsl2018'//database connection name
			);
		});
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
