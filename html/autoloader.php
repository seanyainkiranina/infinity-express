<?php

$dirs=array("../lib/","../config/","../models/");

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

  require_once 'vendor/autoload.php';
  require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';

