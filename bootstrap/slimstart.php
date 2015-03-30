<?php


   $app = new \Slim\Slim(array('debug'=>true));

   $env = $app->environment();

   $env['config'] = $config;
   
   $env['result'] = null;

  Twig_Autoloader::register();

   $twigloader = new Twig_Loader_Filesystem('/var/www/html/templates/');

   $env['twig'] = new Twig_Environment($twigloader, array(
	'cache' =>  '/var/www/html/cache',));

  class slim_manager{


 static function execute(){
	global $app;

	$app->run();

}


  static function response($request,$connector,$template){

	global $app;
	global $env;

		$renderer=function($var=null,$var2=null,$var3=null) use ($env,$template){
        	 		echo	$template($env['result']);

			 };

   		$app->get($request,
         		$connector, 
			$renderer
			);

}

}


