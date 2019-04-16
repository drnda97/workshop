<?php if(!isset($_SESSION['user'])) : ?>
	<form method="POST" action="http://localhost/igorjanosevic/workshop/users/checkuser">
		<?php if (isset($_GET['err'])) : ?>
			<div class="err">
				<?php foreach($_GET['err'] as $err) : ?>
					<?php echo $err; ?>
				<?php endforeach; ?>
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
		<input type="hidden" name="fn" value="login">
		<input type="submit" name="submit" value="Login">
	</form>
<?php else : ?>
	<form action="http://localhost/igorjanosevic/workshop/users/checkuser" method="post" class="">
	    <input type="hidden" name="fn" value="logout">
	    <input type="submit" name="submit" value="Logout">
	</form>
<?php endif;  ?>
