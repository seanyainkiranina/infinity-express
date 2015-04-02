<?php

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
