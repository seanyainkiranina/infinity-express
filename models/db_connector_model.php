<?php


abstract class db_connector_model
{

    function __construct($config)
    {

        $configuration_string="mysql:host=";
        $configuration_string .=$config['host'];
        $configuration_string .=";dbname=";
        $configuration_string .=$config['database'];


        R::setup(
            $configuration_string,
            $config['user'],
            $config['password']
        );


    }

    function __destruct()
    {

        R::close();

    }

      public static function return_database_closure($method)
      {
        
        $database_Model=get_called_class();

            return function ($route) use ($database_Model, $method, $env, $config) {
                global $env;
                global $config;

                $parameters=$route->getParams();


                    $db_Model = new $database_Model($config);
                    $env['result'] = $db_Model->$method($parameters);

            };

      }


        public static function get_middleware()
        {

            $database_Model=get_called_class();
            $middleware_array=array();

            $connectors=func_get_args();

            $loopcount=0;

            $last_connector_key="";


            foreach ($connectors as $connector_key) {
                $middleware_array[$connector_key]=
                $database_Model::return_database_closure($connector_key);
                $loopcount++;
                $last_connector_key=$connector_key;

            }

            if ($loopcount==1) {
                    return
                    $database_Model::return_database_closure($last_connector_key);


            }

            return
            $middleware_array;


        }
}
