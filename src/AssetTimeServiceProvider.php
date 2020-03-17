<?php namespace Gecche\Cupparis\AssetTime;

use Illuminate\Support\ServiceProvider;

class AssetTimeServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;


	/**
	 * Register
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->singleton('asset_time', function($app)
        {
            return new AssetTimeManager($app['files']);
        });
	}

    /**
     * Booting
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/cupparis-assettime.php' => config_path('cupparis-assettime.php'),
        ], 'public');
    }


    /**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('asset_time');
	}

}
