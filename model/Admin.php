<?php

class Admin
{
  public function checkCredentials($username, $password)
  {
    global $conn;
    //prepravi ovde citanje lozinke na hasiranu lozinku
    $query = 'select * from admin where username = "'.$username.'" and password = "'.$password.'"';
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
  public function getNav()
  {
    global $conn;
    $query = 'select * from options';
    $res = $conn->query($query);
    $values = array();
    while ($value = $res->fetch_assoc()) {
      $values[] = $value;
    }
    return $values;
  }
  public function insertProduct($title, $description, $price, $img_url, $logo_img_url, $brand, $id)
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
    $query = 'delete from product where id = '.$id.'';
    $res = $conn->query($query);
    return $res;
  }
  public function getProductFromBase($id)
  {
    global $conn;
    $query = 'select * from products where id = '.$id.'';
    $res = $conn->query($query);
    $result = $res->fetch_assoc();
    return $result;
  }
  public function deleteUser($id)
  {
    global $conn;
    $query = 'delete from users where id = '.$id.'';
    $res = $conn->query($query);
    return $res;
  }
  public function allForDesc()
  {
    global $conn;
    $query = 'select desc_name from desc_name';
    $res = $conn->query($query);
    $descriptions = array();
    while($description = $res->fetch_assoc()){
      $descriptions[] = $description;
    }
    return $descriptions;
  }
  public function updateProductInBase($title, $description, $price, $img_url, $logo_img_url, $brand, $id)
  {
    global $conn;
    $title = mysqli_real_escape_string($conn, $title);
    $description = mysqli_real_escape_string($conn, $description);
    $price = mysqli_real_escape_string($conn, $price);
    $img_url = mysqli_real_escape_string($conn, $img_url);
    $logo_img_url = mysqli_real_escape_string($conn, $logo_img_url);
    $brand = mysqli_real_escape_string($conn, $brand);

    $query = 'update products set title = "'.$title.'", ';
    $query .= 'description = "'.$description.'", ';
    $query .= 'price = '.$price.', ';
    $query .= 'img_url = "'.$img_url.'", ';
    $query .= 'logo_img_url = "'.$logo_img_url.'", ';
    $query .= 'brand = "'.$brand.'" ';
    $query .= 'where id = ' . $id;
    $res = $conn->query($query);
    return $res;
  }
  public function updateUserInBase ($first_name, $last_name, $username, $email, $address, $postal_code, $id)
  {
    global $conn;

    $first_name = mysqli_real_escape_string($conn, $first_name);
    $last_name = mysqli_real_escape_string($conn, $last_name);
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $address = mysqli_real_escape_string($conn, $address);
    $postal_code = mysqli_real_escape_string($conn, $postal_code);

    $query = 'update users set first_name = "'.$first_name.'", ';
    $query .= 'last_name = "'.$last_name.'", ';
    $query .= 'username = "'.$username.'", ';
    $query .= 'email = "'.$email.'" , ';
    $query .= 'address = "'.$address.'", ';
    $query .= 'postal_code = "'.$postal_code.'" ';
    $query .= 'where id = ' . $id;
    $res = $conn->query($query);
    return $res;
  }
  //TO DO: Set value of page option for page option (It only change names not the value, wrong name on the wrong url);
  public function updateNavInBase($args)
  {
    global $conn;
    $id = 1;
    foreach ($args as $value) {
      $query = 'update options set page_option = "'.$value.'" where id = ' . $id;
      $id++;
      $res = $conn->query($query);
    }
    return $res;
  }
}
