<form method="POST" action="http://localhost/igorjanosevic/workshop/users/checkuser">
	<?php if (isset($_GET['err'])) : ?>
		<div class="err">
		<?php foreach($_GET['err'] as $err) : ?>
			<?php echo $err; ?>
		<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<?php if (isset($_GET['suc'])) : ?>
		<div class="succ">
		<?php foreach($_GET['suc'] as $succ) : ?>
			<?php echo $succ; ?>
		<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<h1 class="login-h1">Register</h1>
	<div class="form-control log-in-middle">
		<legend for="first_name">First Name</legend>
		<input type="text" name="first_name" id="first_name" value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : '' ?>">
	</div>
	<div class="form-control log-in-middle">
		<legend for="last_name">Last Name</legend>
		<input type="text" name="last_name" id="last_name" value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : '' ?>">
	</div>
	<div class="form-control log-in-middle">
		<legend for="username">Username</legend>
		<input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>">
	</div>
	<div class="form-control log-in-middle">
		<legend for="email">Email Adress</legend>
		<input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
	</div>
	<div class="form-control log-in-middle">
		<legend for="password">Password</legend>
		<input type="password" name="password" id="password">
	</div>
	<div class="form-control log-in-middle">
		<legend for="re_password">Re-Type Password</legend>
		<input type="password" name="re_password" id="re_password">
	</div>
	<input type="hidden" name="fn" value="register">
	<input type="submit" name="submit" value="Register">
</form>
