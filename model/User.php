<?php

class User
{
	public function create($first_name, $last_name, $username, $email, $password, $address, $postal_code)
	{
		global $conn;
		$first_name = mysqli_real_escape_string($conn, $first_name);
		$last_name = mysqli_real_escape_string($conn, $last_name);
		$username = mysqli_real_escape_string($conn, $username);
		$email = mysqli_real_escape_string($conn, $email);
		$address = mysqli_real_escape_string($conn, $address);
		$postal_code = mysqli_real_escape_string($conn, $postal_code );
		$password = mysqli_real_escape_string($conn, $password);
		$salt = substr(hash('md5', time()), 0, 8);
		$enc_password = hash('md5', $salt.$password);

		$query = 'INSERT INTO users (first_name, last_name, username, email, password, address, postal_code, salt, profile_img_url) VALUES ("'.$first_name.'", "'.$last_name.'", "'.$username.'", "'.$email.'", "'.$enc_password.'", "'.$address.'", "'.$postal_code.'", "'.$salt.'", "./user_images/avatar.png")';

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
	public function login($email)
	{
		global $conn;
		$email = mysqli_real_escape_string($conn, $email);
		$query = 'select salt, password from mockingbird.users where email = "'.$email.'"';
		$res = $conn->query($query);
		$result = $res->fetch_assoc();
		return $result;
	}
	public function updateUserStatus($email)
	{
		global $conn;
		$query = 'update users set loged_in = 1 where email = "'.$email.'"';
		$update_res = $conn->query($query);
		return $update_res;
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
		return $res;
	}
	public function getUserInfo($email)
	{
		global $conn;
		$email = mysqli_real_escape_string($conn, $email);
		$query = 'select * from users where email = "'.$email.'"';
		$res = $conn->query($query);
		$result = $res->fetch_object();
		return $result;
	}
	public function edituserinfo($first_name, $last_name ,$username, $email, $address, $postal_code, $id)
	{
		global $conn;
		$first_name = mysqli_real_escape_string($conn, $first_name);
		$last_name = mysqli_real_escape_string($conn, $last_name);
		$email = mysqli_real_escape_string($conn, $email);
		$email = mysqli_real_escape_string($conn, $email);
		$address = mysqli_real_escape_string($conn, $address);
		$postal_code = mysqli_real_escape_string($conn, $postal_code);
		$query = 'update users set first_name = "'.$first_name.'", last_name = "'.$last_name.'", email = "'.$email.'", username = "'.$username.'", address = "'.$address.'", postal_code = '.$postal_code.' where id = '.$id;
		$res = $conn->query($query);
		return $res;
	}
}
