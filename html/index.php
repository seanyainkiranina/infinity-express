<?php
  require_once '../config/configuration.php';
  require_once 'autoloader.php';
  require_once '../bootstrap/slimstart.php';



	$connectors=Model::get_middleware(
			"get",
			"get_by_state",
   			"get_by_city"
	);

	function render_home_page(){
		global $env;
	 	 return $env['twig']->render('index.html',
		$env['result']);

	}

	slim_manager::response("/zip/:zip", 
			$connectors["get"],
			"render_home_page");

	slim_manager::response("/zips/:zip", 
			$connectors["get"],
			"json_encode");

	slim_manager::response("/city/:city", 
			$connectors["get_by_city"],
			"json_encode");

	slim_manager::execute();
