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

abstract class dbConnectorModel
{
   /* Constructor
    *
    *  Create a new instance passing the configuration 
    *  setup a RedBean with the connection string
    *
    * @param array hash 
    * 
    */
    public function __construct($config)
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
    public function __destruct()
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
      public static function returnDatabaseClosure(string $method)
      {
        
        $databaseModel=get_called_class();

            return function ($route) use ($databaseModel, $method, $env, $config) {
                global $env;
                global $config;

                $parameters=$route->getParams();


                    $dbModel = new $databaseModel($config);
                    $env['result'] = $dbModel->$method($parameters);

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
        public static function getMiddleware()
        {

            $databaseModel=get_called_class();
            $middlewareArray=array();

            $connectors=func_get_args();



            if (count($connectors)==1) {
                    return
                    $databaseModel::returnDatabaseClosure($connectors[0]);


            }


            foreach ($connectors as $connectorKey) {
                $middlewareArray[$connectorKey]=
                $databaseModel::returnDatabaseClosure($connectorKey);

            }


            return
            $middlewareArray;


        }
}
