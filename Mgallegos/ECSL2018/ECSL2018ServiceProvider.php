<?php namespace Mgallegos\ECSL2018;

use Carbon\Carbon;

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

		$this->registerCustomPrintFormats();

		$this->registerRegistrationFormInterface();

		$this->registerCardTouchInterface();

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
	* Register custom print formats.
	*
	* @return void
	*/
	protected function registerCustomPrintFormats()
	{
		$customPrintFormatsArray = $this->app->make('customPrintFormats');
		$customPrintFormatsArray['EC0001'] = new \Mgallegos\ECSL2018\CustomFormats\FacturaComercial($this->app->make('dompdf.wrapper'));

		$this->app->instance('customPrintFormats', $customPrintFormatsArray);
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
			return new \Mgallegos\ECSL2018\Repositories\RegistrationForm\EloquentRegistrationForm( new \Mgallegos\ECSL2018\RegistrationForm(), 'ecsl2018');
		});
	}

	/**
	* Register a CardTouch interface instance.
	*
	* @return void
	*/
	protected function registerCardTouchInterface()
	{
		$this->app->bind('Ecsl2018CardTouchInterface', function($app)
		{
			return new \Mgallegos\ECSL2018\Repositories\CardTouch\EloquentCardTouch( new \Mgallegos\ECSL2018\CardTouch(), 'ecsl2018');
		});
	}

	/**
	 * Register a ... interface instance.
	 *
	 * @return void
	 */
	protected function registerOpenCmsManagementInterface()
	{
		$this->app->bind('Ecsl2018OpenCmsManagementInterface', function($app)
		{
			return new \Mgallegos\ECSL2018\Services\OpenCmsManagement\Ecsl2018OpenCmsManager(
					$app->make('App\Kwaai\Security\Services\AuthenticationManagement\AuthenticationManagementInterface'),
					$app->make('App\Kwaai\Security\Services\JournalManagement\JournalManagementInterface'),
					$app->make('Mgallegos\DecimaOpenCms\OpenCms\Services\SettingManagement\SettingManagementInterface'),
					$app->make('App\Kwaai\Security\Repositories\Journal\JournalInterface'),
					$app->make('App\Kwaai\Organization\Repositories\Organization\OrganizationInterface'),
					$app->make('App\Kwaai\System\Repositories\Currency\CurrencyInterface'),
					$app->make('Mgallegos\DecimaOpenCms\OpenCms\Repositories\User\UserInterface'),
					$app->make('Mgallegos\DecimaOpenCms\OpenCms\Repositories\UserEvent\UserEventInterface'),
					$app->make('Ecsl2018RegistrationFormInterface'),
					$app->make('Ecsl2018CardTouchInterface'),
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
					$app['db'],
					$app['mailer'],
					new Carbon(),
					$app->make('dompdf.wrapper'),
					$app->make('Mgallegos\DecimaOpenCms\OpenCms\Services\PaymentManagement\PaymentManagementInterface'),
					$app->make('Mgallegos\DecimaOpenCms\OpenCms\Services\TransportationRequestManagement\TransportationRequestManagementInterface'),
					$app->make('Mgallegos\DecimaOpenCms\OpenCms\Services\PresentationManagement\PresentationManagementInterface'),
					$app->make('Mgallegos\DecimaSale\Sale\Services\ClientManagement\ClientManagementInterface'),
					$app->make('Mgallegos\DecimaSale\Sale\Services\OrderManagement\SaleOrderManagementInterface'),
					$app->make('Mgallegos\DecimaFile\File\Services\FileManagement\FileManagementInterface')
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
