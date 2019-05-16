<?php

class User
{
	public function create($first_name, $last_name, $username, $email, $password)
	{
		global $conn;
		$first_name = mysqli_real_escape_string($conn, $first_name);
		$last_name = mysqli_real_escape_string($conn, $last_name);
		$username = mysqli_real_escape_string($conn, $username);
		$email = mysqli_real_escape_string($conn, $email);
		$password = mysqli_real_escape_string($conn, $password);

		$query = 'INSERT INTO users (first_name, last_name, username, email, password, profile_img_url) VALUES ("'.$first_name.'", "'.$last_name.'", "'.$username.'", "'.$email.'", "'.$password.'", "./user_images/avatar.png")';

		$res = $conn->query($query);
		return $res;
	}
	public function checkCredentials($email, $username)
	{
		global $conn;
		$query = 'select * from users where email = "'.$email.'" and username = "'.$username.'"';
		$res = $conn->query($query);
		return $res->num_rows == 0;
	}
	public function login($email, $password)
	{
		global $conn;
		$query = 'select * from mockingbird.users where email = "'.$email.'" and password = "'.$password.'"';
		$res = $conn->query($query);
		if ($res->num_rows == 1){
			$query = 'update users set loged_in = 1 where email = "'.$email.'"';
			$update_res = $conn->query($query);
			if ($update_res){
				$user = $res->fetch_object();
				return $user;
			}
			return false;
		} else {
			return false;
		}
	}
	public function logout()
	{
		global $conn;
		$query = 'update users set loged_in = 0 where id =  "'.$_SESSION['user']->id.'"';
		$res = $conn->query($query);
	}
	public function updateprofileimg($file_new_destination, $id)
	{
		global $conn;
		$query = 'UPDATE users SET profile_img_url = "' .$file_new_destination. '"  WHERE id = '. $id;
		$res = $conn->query($query);
		var_dump('ovde sam');
		return $res;
	}
}
