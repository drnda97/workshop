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
			if ($user_no_exists = $user->checkuserimg($_SESSION['user']->id)) {
				$create_img_for_user = $user->createimgforuser('../user_images/avatar.png', $_SESSION['user']->id); 
			}
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

	public function getBaseName($path){
		$path = substr($path, strrpos($path, '/') + 1);
		return $path;
	}
	private function createIfDoesntExist($uploads_dir, $folder_name){
		$dir_found = false;
		$upload_dir_content = glob($uploads_dir . '*');
		foreach ($upload_dir_content as $dir_name) {
			$dirname = $this->getBaseName($dir_name);
			if ($dirname == $folder_name) {
				$dir_found = true;
				break;
			}
		}

		if (!$dir_found){
			mkdir($uploads_dir . $folder_name);
		}
	}
	public function editprofileimg()
	{
		if(!isset($_FILES)){
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}else if($_FILES['upload_image']['size'] == 0){
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err[]=Please choose the image.');
		}
		$uploads_dir = './user_images/';
		$file_name = $_FILES['upload_image']['name'];
		$file_tmp_name = $_FILES['upload_image']['tmp_name'];
		$file_error = $_FILES['upload_image']['error'];
		$file_size = $_FILES['upload_image']['size'];
		$folder_name = $_SESSION['user']->username;
		$file_ext = explode('.', $file_name);
		$file_real_ext = strtolower(end($file_ext));
		$allowed = array('jpg', 'jpeg', 'png');

		if (!in_array($file_real_ext, $allowed)) {
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err[]=You cannot upload the file of this type.');
		}

		if ($file_error !== 0) {
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err[]=Something went wrong please try again.');
		}

		if ($file_size > 1000000) {
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err[]=The image is too big.');
		}

		$file_new_name = time() .'.'.$file_real_ext;
		$this->createIfDoesntExist($uploads_dir, $folder_name);
		$uploads_dir .= $folder_name;
		$file_new_destination = $uploads_dir. '/' .$file_new_name;
		$result = move_uploaded_file($file_tmp_name, $file_new_destination);

		$user_img = new User();
		$img_display = $user_img-> updateprofileimg($file_new_destination, $_SESSION['user']->id);
		$img_url = $user_img->getprofileimg($_SESSION['user']->id);
		$_SESSION['img'] = $img_url;
		header('Location: ' . $_SERVER['HTTP_REFERER']);

	}
}
