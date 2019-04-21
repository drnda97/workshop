<?php

// require('./classes/View.php');

class UsersController
{
	/*
	*Route to display login form
	*/
	public function login()
	{
		// var_dump('pozdrav');
		$view = new View();
		$view->load('user', 'login');
	}
	/*
	*Route to display register form
	*/
	public function register()
	{
		$view = new View();
		$view->load('user', 'register');
	}
	/*
	*Route to display profile of the user
	*/
	public function profile()
	{
		$view = new View();
		$view->load('user', 'profile');
	}
	/*
	*Route to login and create a user
	*/
	public function checkuserregister()
	{
		if (!isset($_REQUEST['submit'])) {
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
			$err = array();
			if (!isset($_POST['first_name']) ||
				!isset($_POST['last_name']) ||
				!isset($_POST['username']) ||
				!isset($_POST['email']) ||
				!isset($_POST['password'])
			){
				$err[] = 'Missing fields';
			}
			$first_name = trim($_POST['first_name']);
			$last_name = trim($_POST['last_name']);
			$username = trim($_POST['username']);
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			$re_password = trim($_POST['re_password']);
			if ($_POST['first_name'] == '') {
				$err[] = 'First name is required';
			}
			if ($_POST['last_name'] == '') {
				$err[] = 'Last name is required';
			}
			if ($_POST['username'] == '') {
				$err[] = 'username is required';
			}
			if ($_POST['email'] == '') {
				$err[] = 'Email address is required';
			}
			if ($_POST['password'] == '') {
				$err[] = 'Password is required';
			}
			if ($_POST['re_password'] == '') {
				$err[] = 'Re-Type Password is required';
			}

			if ($password != $re_password) {
				$err[] = 'Passwords don\'t match';
			}

			if (count($err) > 0) {
				if (count($err) == 1) {
					$err_str = '&err[]=' . $err[0];
				}else{
					$err_str = implode('&err[]=', $err);
				}
				$err_str = '?' . substr($err_str, 1);
				header('Location: ' . $_SERVER['HTTP_REFERER'] . $err_str);
			}
			$user = new User();
			if ($user->checkCredentials($email,$username)) {
				$is_created = $user->create($first_name, $last_name, $username, $email, $password);
				if ($is_created) {
					header('Location: ' . $_SERVER['HTTP_REFERER'] . '?suc[]=Successfully registered.');
				}
			}else{
				header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err[]=User with entered username and/or email already exists.');
			}
	}
	public function checkuserlogin()
	{
		if (!isset($_REQUEST['submit'])) {
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
		$err = array();

		if (!isset($_POST['email']) ||
			!isset($_POST['password'])
		){
			$err[] = 'Missing Field';
		}
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		if ($email == '') {
			$err[] = 'Email is required!';
		}
		if ($password == '') {
			$err[] = 'Password is required!';
		}
		if (count($err) > 0) {
			if (count($err) == 1) {
				$err_str = '&err[]=' . $err[0];
			}else{
				$err_str = implode('&err[]=', $err);
			}
			$err_str = '?' . substr($err_str, 1);
			header('Location: '. $_SERVER['HTTP_REFERER'] . $err_str);
		}
		$user = new User();
		if ($user_date = $user->login($email, $password)) {
			$_SESSION['user'] = $user_date;
			header('Location: http://localhost/igorjanosevic/workshop/');
		}
	}
	public function checkuserlogout()
	{
		$user = new User();
		$user->logout();
		unset($_SESSION['user']);
		header('Location: http://localhost/igorjanosevic/workshop/users/login');
	}
	public function edituser()
	{
		var_dump('Edituj mi adresu i postanski broj');
	}
}
