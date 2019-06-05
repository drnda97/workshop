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
}
