<?php
session_start();
// autoload the controller
// spl_autoload_register(function($class){
// 		require('./controller/'.$class.'.php');
// });
foreach (glob('./model/*') as $model_name) {
	require($model_name);
}
foreach (glob('./classes/*') as $class_name) {
	require($class_name);
}
// require('./classes/View.php');
// require('./classes/Request.php');
// require('./classes/Router.php');
require('./db.php');

$router = new Router();
?>
<link rel="stylesheet" href="assets/css/main.css">
