<?php

class Admin
{
  public function checkCredentials($email,$username,$password)
  {
    global $conn;
    $query = 'select * from admin where email = "'.$email.'" and username = "'.$username.'" and password = "'.$password.'"';
    $resource = $conn->query($query);
    return $resource;
  }
  public function getAllUsers()
  {
    global $conn;
    $query = 'select * from users';
    $resource = $conn->query($query);
    $users_data = [];
    while($user = $resource->fetch_assoc()){
      $users_data[] = $user;
    }
    return $users_data;
  }
  public function getAllProducts()
  {
    global $conn;
    $query = 'select * from products';
    $resource = $conn->query($query);
    $products_data = [];
    while($product = $resource->fetch_assoc()){
      $products_data[] = $product;
    }
    return $products_data;
  }
  public function interactionWithUsers($action, $id)
  {
    global $conn;
    // $query = "'$action'" . 'user from table user where id = ' $id;
  }
  public function insertProduct($title, $description, $price, $img_url, $logo_img_url, $brand)
  {
    global $conn;
    $title = mysqli_real_escape_string($conn, $title);
    $description = mysqli_real_escape_string($conn, $description);
    $price = mysqli_real_escape_string($conn, $price);
    $img_url = mysqli_real_escape_string($conn, $img_url);
    $logo_img_url = mysqli_real_escape_string($conn, $logo_img_url);
    $brand = mysqli_real_escape_string($conn, $brand);

    $query = 'INSERT INTO products VALUES(null, "'.$title.'", "'.$description.'", "'.$price.'", "'.$img_url.'", "'.$logo_img_url.'", "'.$brand.'")';
    $res = $conn->query($query);
    return $res;
  }
  public function deleteProduct($id)
  {
    global $conn;
    $query = 'delete from products where id = '.$id.'';
    $res = $conn->query($query);
    return $res;
  }
  public function deleteUser($id)
  {
    global $conn;
    $query = 'delete from users where id = '.$id.'';
    $res = $conn->query($query);
    return $res;
  }
}
