<?php
namespace infinityExpress;

/*
 * This file is part of Infinity  Express
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author <seanyainkiranina@yahoo.com>
 */

class connectorView
{

    public $twig;

    protected function __construct()
    {
	$templates=$GLOBALS['config']['filesystem'];
	$cache=$GLOBALS['config']['cache'];

	


        \Twig_Autoloader::register();

        $twigloader = new \Twig_Loader_Filesystem($templates);

        $this->twig = new \Twig_Environment($twigloader, array(
        'cache' =>$cache,));

    }

    protected static function renderPage($page)
    {


        return function () use ($page) {

	   $config=$GLOBALS['env']['config'];

            $masterClass=get_called_class();


            $viewClass = new $masterClass(
            $config['filesystem'],
            $config['cache']

            );


            return $viewClass->twig->render(
                $page,
                array('data'=>$GLOBALS['env']['result'])
            );



        };

    }
    protected static function renderJson()
    {

        return function () {



            return json_encode($GLOBALS['env']['result']);

        };

    }
}
