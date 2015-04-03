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

class View extends connectorView
{
   /*
    *  Constructor 
    *  @param Twig template directory Twig cache
    */
    public function __construct($templates, $cache)
    {

        parent::__construct($templates, $cache);

    }
   /* getPageRender 
    *  
    * @param List of Twig template files
    * @return Hash array of closure Twig methods
    */
    public static function getPageRender()
    {
	if (count(func_get_args())==1){
            return self::renderPage($argv[0]);
	}
        $returnArray=array();

        foreach (func_get_args() as $page) {
            $returnArray[$page]
            =self::renderPage($page);

        }
        return $returnArray;

    }

    // TODO Add more data renders XML, csv etc 
    // This is just a snub 
    public static function getDataRenders()
    {
	if (count(func_get_args())==1){
            return self::renderJson(); 
	}

        $returnArray=array();
        foreach (func_get_args() as $page) {
            $returnArray[$page]
            =self::renderJson(); 
        }
        return $returnArray;

    }
}
