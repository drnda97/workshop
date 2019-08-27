<?php
session_start();

foreach (glob('./model/*') as $model_name) {
	require($model_name);
}
foreach (glob('./classes/*') as $class_name) {
	require($class_name);
}

require('./db.php');
$admin = new Admin();
$_SESSION['nav'] = $admin->getNav();
$router = new Router();
?>
