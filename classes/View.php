<?php

class View
{
	public $data = array();
	public function load($entity_name, $partial_name)
	{
		require('./view/includes/header.php');

		require('./view/'.$entity_name.'/'.$partial_name.'.php');

		require('./view/includes/footer.php');
	}
	public static function  adminload($entity_name, $partial_name)
	{
		require('./view/admin/adminincludes/header.php');

		require('./view/admin/'.$entity_name.'/'.$partial_name.'.php');

	}
	public static function  adminloginload($entity_name, $partial_name)
	{
		require('./view/'.$entity_name.'/'.$partial_name.'.php');
	}
}
