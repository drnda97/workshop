<!DOCTYPE html>
	<html>
		<head>
			<title></title>
		</head>
		<noscript>
			<meta http-equiv="refresh" content="0; url=http://localhost/igorjanosevic/workshop/pages/noJsScript" />
		</noscript>
		<meta charset="UTF-8">
		<?php if (!isset($_GET['url'])): ?>
			<script type="text/javascript" src="./js/main.js"></script>
			<script type="text/javascript" src="./js/admin.js"></script>
		<?php elseif($_GET['url'] == 'products/products'): ?>
			<script type="text/javascript" src="../js/second.js"></script>
			<script type="text/javascript" src="../js/product.js"></script>
		<?php elseif($_GET['url'] == 'user/profile'): ?>
			<script type="text/javascript" src="../js/second.js"></script>
			<script type="text/javascript" src="../js/profile.js"></script>
		<?php else: ?>
			<script type="text/javascript" src="../js/second.js"></script>
		<?php endif; ?>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php dirname('includes/header.php', 1) ?>../assets/css/main.css">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<body>
		<?php require('navbar.php');  ?>
