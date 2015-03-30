<?php


   class Model extends db_connector_model {

	function get($parameters){

		$zip_passed=$parameters['zip'];

		return R::getAll( 'SELECT * from zips where zip=:zip LIMIT 10',

		[':zip'=>$zip_passed]

		);


	}
	function get_by_state($parameters){
		$state=$parameters['state'];
		return R::getAll( 'SELECT * from zips where state=:state LIMIT 10',
		[':state'=>$state]
		);


	}
	function get_by_city($parameters){
		$city=$parameters['city'];

		return R::getAll( 'SELECT * from zips where city=:city LIMIT 10',
		[':city'=>$city]
		);
}
}
