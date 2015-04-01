<?php
abstract class twig_connector_view{

  protected var $twig;

protected function __construct($templates,$cache){

  Twig_Autoloader::register();

   $twigloader = new Twig_Loader_Filesystem($templates);

   $this->twig = new Twig_Environment($twigloader,array(
	'cache' =>$cache,));

}

protected static function render_page($page){


	return function($data) use ($page){ 

		global $env;
		$config=$env['config'];

		$viewClass = new get_called_class(
			$config['filtersystem'],
			$config['cache']

		);

		return $this->$twig->render($page,
		array('data'=>$data));


	};

}
protected static function render_json(){

		return function($data){

		json_encode($data);

		};

}



}


