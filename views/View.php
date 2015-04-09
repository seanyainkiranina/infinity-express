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
    public function __construct()
    {

        parent::__construct();

    }
   /* getPageRender 
    *  
    * @param List of Twig template files
    * @return Hash array of closure Twig methods
    */
    public static function getPageRenders()
    {
	$arg=func_get_args();
	if (count($arg)==1){
            return self::renderPage($arg[0]);
	}
        $returnArray=array();

        foreach ($arg as $page) {
            $returnArray[$page]
            =self::renderPage($page);

        }
        return $returnArray;

    }

    // TODO Add more data renders XML, csv etc 
    // This is just a snub 
    public static function getDataRenders()
    {
	$arg=func_get_args();
	if (count($arg)==1){
	    
            return self::renderJson(); 
	}

        $returnArray=array();
        foreach ($arg as $page) {
            $returnArray[$page]
            =self::renderJson(); 
        }
        return $returnArray;

    }
}
