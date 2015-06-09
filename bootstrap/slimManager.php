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



class slimManager
{

    public static $app =null;

    public static function init($config)
    {

        self::$app = new \Slim\Slim(array('debug'=>true));
        $GLOBALS['env'] = self::$app->environment();
        $GLOBALS['env']['config'] = $config;
        $GLOBALS['result'] = null;
	self::$app->add(new \Slim\Middleware\SessionCookie(array(
	'expires' => $config['expires'],
	'path' => '/',
	'secure' => false,
	'httponly' => false,
	'name' => $config['session_name'],
	'secert' => $config['secert'],
	'cipher' => MCRYPT_RIJNDAEL_256,
	'cipher_mode' => MCRYPT_MODE_CBC)));



    }


    public static function execute()
    {

        self::$app->run();

    }

    public static function response($request, $connector, $template, $method = "get", $conditions = null)
    {


        $renderer =function () use ($template) {


                echo $template();

        };

        if ($conditions !=null) {
            self::$app->$method($request,
                $connector,
            $renderer
                )->conditions($conditions);

            return;
        }
            self::$app->$method($request,
             $connector,
            $renderer
            );

    }
}
