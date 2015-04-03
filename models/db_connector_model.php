<?php

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

abstract class db_connector_model
{
   /* Constructor
    *
    *  Create a new instance passing the configuration 
    *  setup a RedBean with the connection string
    *
    * @param array hash 
    * 
    */
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

   /* Destructor
    *
    * Close the database connection with Redbean
    */
    function __destruct()
    {

        R::close();

    }
     /* Create A Closure
      * 
      * Invoke a instance of the class that inherits this class
      * executes the passed method name of the inherited class
      * 
      * @param Method Name of class that this class inherits
      * @return is passed into the environment env['result']
      */
      public static function return_database_closure(string $method)
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

       /* Function Factory
        * 
        * Class that inherits this abstract class  
        * @param any number of strings that correspond with the
        * methods of the inherited class that are returned as closure 
        * functions 
        * @return hash array of the methods or a single method if one 
        * parameter passed
        */
        public static function get_middleware()
        {

            $database_Model=get_called_class();
            $middleware_array=array();

            $connectors=func_get_args();


            $last_connector_key="";

            if (count($connectors)==1){
                    return
                    $database_Model::return_database_closure($last_connector_key);


            }


            foreach ($connectors as $connector_key) {
                $middleware_array[$connector_key]=
                $database_Model::return_database_closure($connector_key);
                $last_connector_key=$connector_key;

            }


            return
            $middleware_array;


        }
}
