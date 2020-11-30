<?php 
namespace Inc;
/**
*@package RnPlugin
*/

final class Init
{
	/**
	*Sore all the classes inside an array
	*@return [type][description]
	*/
	public static function get_services(){
		return [
			Pages\Admin::class,
			Base\Enqueue::class,
			Base\SettingsLinks::class,
		];
	}

	/** 
	*Loop throught the classes, initalize them,
	*and call the register() method if it exists
	*@return
	*/

	public static function register_services(){
		foreach (self::get_services() as $class) {
			$service=self::instantiate($class);
			if(method_exists($service, 'register')){
				$service->register();
			}
		}
	}


	private static function instantiate($class){
		$service=new $class();
		return $service;
	}
}

