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

class View extends connector_view
{

    public function __construct($templates, $cache)
    {

        parent::__construct($templates, $cache);

    }
    static function get_page_render($page)
    {


        return self::render_page($page);
    }

    static function get_page_renders()
    {


        $return_array=array();

        foreach (func_get_args() as $page) {
            $return_array[$page]
            =self::render_page($page);

        }
        return $return_array;

    }
    static function get_data_renders()
    {

        $return_array=array();
        foreach (func_get_args() as $page) {
            $return_array[$page]
            =self::render_json();

        }
        return $return_array;

    }
    static function get_data_render($page)
    {
            return self::render_json();


    }
}
