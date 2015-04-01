<?php
  require_once '../config/configuration.php';
  require_once 'autoloader.php';
  require_once '../bootstrap/slimstart.php';

	slim_manager::init();
/*
*
* Create closures connectors to data layer
*/
	$connectors=Model::get_middleware(
			"get",
			"get_by_state",
   			"get_by_city"
	);

	$views=View::get_page_renders(
			"index2.html",
			"index.html"
	);
	$data_views=View::get_data_renders(
			"json"
	);

	slim_manager::response("/zip/:zip", 
			$connectors["get"],
			$views["index2.html"]);

	slim_manager::response("/zips/:zip", 
			$connectors["get"],
			$data_views["json"]);

	slim_manager::response("/city/:city", 
			$connectors["get_by_city"],
			$data_views["json"]);

	slim_manager::execute();
