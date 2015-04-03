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

class connector_view
{

    public $twig;

    protected function __construct($templates, $cache)
    {

        Twig_Autoloader::register();

        $twigloader = new Twig_Loader_Filesystem($templates);

        $this->twig = new Twig_Environment($twigloader, array(
        'cache' =>$cache,));

    }

    protected static function render_page($page)
    {


        return function () use ($page) {

            global $env;
            $config=$env['config'];

            $masterClass=get_called_class();


            $viewClass = new $masterClass(
            $config['filesystem'],
            $config['cache']

            );


            return $viewClass->twig->render(
                $page,
                array('data'=>$env['result'])
            );



        };

    }
    protected static function render_json()
    {

        return function () {
            global $env;



            return json_encode($env['result']);
        };

    }
}
