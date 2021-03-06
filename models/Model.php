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

class Model extends dbConnectorModel
{

// Methods below are just examples of functionality
// Using a zip code database as that is what we got

    public function get($parameters)
    {

        $zip_passed=$parameters['zip'];

        return \R::getAll(
            'SELECT * from zips where zip=:zip LIMIT 10',
            [':zip'=>$zip_passed]
        );


    }
    public function getByState($parameters)
    {
        $state=$parameters['state'];
        return \R::getAll(
            'SELECT * from zips where state=:state LIMIT 10',
            [':state'=>$state]
        );


    }
    public function getByCity($parameters)
    {
        $city=$parameters['city'];

        return \R::getAll(
            'SELECT * from zips where city=:city LIMIT 10',
            [':city'=>$city]
        );
    }
}
