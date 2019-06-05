<?php
session_start();
foreach (glob('./model/*') as $model_name) {
	require($model_name);
}
foreach (glob('./classes/*') as $class_name) {
	require($class_name);
}

require('./db.php');

$router = new Router();
?>
<link rel="stylesheet" href="assets/css/main.css">
