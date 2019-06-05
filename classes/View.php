<?php

class View
{
	public $data = array();
	public $availabe_nav = array(
		'Pocetna' => 'http://localhost/igorjanosevic/workshop/',
		'Proizvodi' => 'http://localhost/igorjanosevic/workshop/products/products',
		'Zanimljivosti' => 'http://localhost/igorjanosevic/workshop/pages/about',
		'Kontakt' => 'http://localhost/igorjanosevic/workshop/pages/contact',
		'Korpa' => 'http://localhost/igorjanosevic/workshop/products/bracket'
	);
	public $user_nav = array(
		'Login' => 'http://localhost/igorjanosevic/workshop/users/login',
		'Register' => 'http://localhost/igorjanosevic/workshop/users/register',
		// '$_SESSION[\'user\']->first_name .' '. $_SESSION[\'user\']->last_name;' => 'http://localhost/igorjanosevic/workshop/users/profile'
	);
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
