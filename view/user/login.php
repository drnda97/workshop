<?php if(!isset($_SESSION['user'])) : ?>
	<form method="POST" action="http://localhost/igorjanosevic/workshop/users/checkuserlogin">
		<?php if (isset($_GET['err'])) : ?>
			<div class="err">
				<?php echo $_GET['err']; ?>
			</div>
		<?php endif; ?>

		<h1 class="login-h1">Login</h1>
		<div class="form-control log-in-middle">
			<legend for="email">Email Adress</legend>
			<input type="email" name="email" id="email">
		</div>
		<div class="form-control log-in-middle">
			<legend for="password">Password</legend>
			<input type="password" name="password" id="password">
		</div>
		<legend>You don't have account yet? <a href="./register">Register</a></legend>
		<input type="submit" name="submit" value="Login">
	</form>
<?php else : ?>
	<form action="http://localhost/igorjanosevic/workshop/users/checkuserlogout" method="post" class="">
	    <input type="submit" name="submit" value="Logout">
	</form>
<?php endif;  ?>
