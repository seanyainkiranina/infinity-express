<?php


$dirs=array("../lib/",
		"../config/");

foreach($dirs as $dir){

if (is_dir($dir)){
	if ($dh = opendir($dir)){
		while(($file = readdir($dh)) !== false){
			if (is_file($dir.$file)){
			require_once($dir.$file);
			}
		}
		closedir($dh);
	}

}
}

	if(!function_exists('classAutoLoader')){

		function classAutoLoader($class){

			$dirs=array("../views/",
				"../models/");

				foreach($dirs as $dir){

					if (is_dir($dir)){
					if (is_file($dir.$class.".php")){
					require_once($dir.$class.".php");

					}
					}
				}

			}
	}
	spl_autoload_register('classAutoLoader');

  require_once 'vendor/autoload.php';
  require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';


