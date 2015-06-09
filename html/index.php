<?php

  require_once '../bootstrap/slimManager.php';
  require_once '../config/configuration.php';
  require_once 'autoloader.php';

  infinityExpress\slimManager::init($config);
/*
 *
 * Create closures and have slim connect them to the route
 * every string parameter below will be stored in table
 * loop to store routes middle ware connectors and twig template names
 * 
 */
    $connectors=infinityExpress\Model::getMiddleware(
        "get",
        "get_by_state",
        "get_by_city"
    );
/*
 *
 * Create a instance of a new Page class and pass it values
 * the page class is then rendered using twig into an angular single
 * ctrl page. This example uses the gray.html template
 *
 */
    $connectors['static']=function ($parameters) {
        $page = new infinityExpress\Page();
        $page->appName = "isFirstApp";
        $page->title ="IE";
        $page->description ="Infinity Express";
        $page->author ="me";
        $page->h1="Infinity Express";
        $page->appCtrl ="isFirstCtrl";
        $page->ctrlTitle ="First Ctrl";
        $page->appItem = "zip";
        $page->appContainer="zips";
        $page->itemProps =array('zip','city','state');
        $page->appDataSrc="/zips/60068";
        $GLOBALS['env']['result']=$page;

    };


    $views=infinityExpress\View::getPageRenders(
        "index3.html",
        "index2.html",
        "error.html",
        "gray.html"
    );


    $views["json"]=infinityExpress\View::getDataRenders(
        "json"
    );


    infinityExpress\slimManager::notFound(
      infinityExpress\View::getPageRenders("error.html")

    );

    infinityExpress\slimManager::response(
      "/",
      $connectors['static'],
      infinityExpress\View::getPageRenders("gray.html")
   );

    infinityExpress\slimManager::response(
      "/zip/:zip",
      infinityExpress\Model::getMiddleware("get"),
      $views["index2.html"]
  );

    infinityExpress\slimManager::response(
      "/zips/:zip",
      $connectors["get"],
      $views["json"]
  );

    infinityExpress\slimManager::response(
      "/city/:city",
      $connectors["get_by_city"],
      $views["json"]
  );

    infinityExpress\slimManager::execute();
