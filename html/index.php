<?php
  use infinityExpress;

  require_once '../config/configuration.php';
  require_once 'autoloader.php';
  require_once '../bootstrap/slimstart.php';

    slimManager::init();
/*
 *
 * Create closures and have slim connect them to the route
 * every string parameter below will be stored in table
 * loop to store routes middle ware connectors and twig template names
 * 
 */
    $connectors=Model::getMiddleware(
        "get",
        "get_by_state",
        "get_by_city"
    );
    $connectors['static']=function ($parameters) {


    };


    $views=View::getPageRenders(
        "index3.html",
        "index2.html",
        "error.html",
        "index.html"
    );
    $views["json"]=View::getDataRenders(
        "json"
    );
    slimManager::response(
        "/error",
        $connectors['static'],
        View::getPageRenders("error.html")
    );
    slimManager::response(
        "/",
        $connectors['static'],
        View::getPageRenders("index3.html")
    );

    slimManager::response(
        "/zip/:zip",
        Model::getMiddleware("get"),
        $views["index2.html"]
    );

    slimManager::response(
        "/zips/:zip",
        $connectors["get"],
        $views["json"]
    );

    slimManager::response(
        "/city/:city",
        $connectors["get_by_city"],
        $views["json"]
    );

    slimManager::execute();
