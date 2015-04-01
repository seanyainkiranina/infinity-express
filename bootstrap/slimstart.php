<?php

global $env;


class slim_manager{

public	static $app =null;

public static	function init(){

		global $env;

		global $config;

   		self::$app = new \Slim\Slim(array('debug'=>true));
   		$env = self::$app->environment();
   		$env['config'] = $config;
   		$env['result'] = null;


	}


public static function execute(){

	self::$app->run();

}

public  static function response($request,$connector,$template){


		$renderer =function() use ($template){


				echo $template();	

			};


   		self::$app->get($request,
         		$connector, 
			$renderer
			);

}
}
