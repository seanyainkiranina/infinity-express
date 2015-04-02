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
    $connectors['static']=function ($parameters) {


    };


    $views=View::get_page_renders(
        "index3.html",
        "index2.html",
        "error.html",
        "index.html"
    );
    $views["json"]=View::get_data_render(
        "json"
    );
    slim_manager::response(
        "/error",
        $connectors['static'],
        View::get_page_render("error.html")
    );
    slim_manager::response(
        "/",
        $connectors['static'],
        View::get_page_render("index3.html")
    );

    slim_manager::response(
        "/zip/:zip",
        Model::get_middleware("get"),
        $views["index2.html"]
    );

    slim_manager::response(
        "/zips/:zip",
        $connectors["get"],
        $views["json"]
    );

    slim_manager::response(
        "/city/:city",
        $connectors["get_by_city"],
        $views["json"]
    );

    slim_manager::execute();
