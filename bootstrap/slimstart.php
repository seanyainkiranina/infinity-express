<?php


   $app = new \Slim\Slim(array('debug'=>true));

   $env = $app->environment();

   $env['config'] = $config;
   
   $env['result'] = null;


  class slim_manager{


 static function execute(){
	global $app;

	$app->run();

}


  static function response($request,$connector,$template){

	global $app;
	global $env;

		$renderer=function($var=null,$var2=null,$var3=null) use ($env,$template){
        	 		echo	$template();

			 };

   		$app->get($request,
         		$connector, 
			$renderer
			);

}

}


