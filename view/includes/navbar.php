<nav class="clearfix" id="nav">
	<?php if(!isset($_GET['url'])) : ?>
		<a href="http://localhost/igorjanosevic/workshop/" class="mocking"><img src="./assets/images/logo1.png" id="logo"></a>
	<?php else : ?>
		<a href="http://localhost/igorjanosevic/workshop/" class="mocking"><img src="<?php dirname('includes/header.php', 1) ?>../assets/images/logo1.png" id="logo"></a>
	<?php endif; ?>
	<ul>
		<li><a href="http://localhost/igorjanosevic/workshop/">Pocetna</a></li>
		<li><a href="http://localhost/igorjanosevic/workshop/products/products">Proizvodi</a></li>
		<li><a href="http://localhost/igorjanosevic/workshop/pages/about">Zanimljivosti</a></li>
		<li><a href="http://localhost/igorjanosevic/workshop/pages/contact">Kontakt</a></li>
		<li>
			<a href="http://localhost/igorjanosevic/workshop/products/bracket" class="cart"><i class="fas fa-shopping-cart"></i> Korpa</a>
		</li>
	</ul>
	<?php if (!isset($_SESSION['user'])): ?>
		<div class="log-reg">
			<a href="http://localhost/igorjanosevic/workshop/users/login">Login</a>
			<span>/</span>
			<a href="http://localhost/igorjanosevic/workshop/users/register">Register</a>
		</div>
<?php else : ?>
	<div class="log-reg">
		<a href="http://localhost/igorjanosevic/workshop/users/profile"><?php echo $_SESSION['user']->first_name .' '. $_SESSION['user']->last_name;  ?></a>
	</div>
<?php endif; ?>
</nav>
