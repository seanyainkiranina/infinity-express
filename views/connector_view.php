<?php
class connector_view{

public $twig;

protected function __construct($templates,$cache){

  Twig_Autoloader::register();

   $twigloader = new Twig_Loader_Filesystem($templates);

   $this->twig = new Twig_Environment($twigloader,array(
	'cache' =>$cache,));

}

protected static function render_page($page){

		global $env;

	return function() use ($page,$env){ 

		global $env;
		$config=$env['config'];

		$masterClass=get_called_class();


		$viewClass = new $masterClass(
			$config['filesystem'],
			$config['cache']

		);


		return $viewClass->twig->render($page,
		array('data'=>$env['result']));



	};

}
protected static function render_json(){

		return function(){
		global $env;



		return json_encode($env['result']);
		};

}



}


