<?php namespace Gecche\Cupparis\AssetTime\Facades;

use Illuminate\Support\Facades\Facade as Facade;

class AssetTime extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'asset_time'; }

}