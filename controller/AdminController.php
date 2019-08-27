<?php

class AdminController
{
  	public function startupage()
    {
      View::adminloginload('admin', 'adminlogin');
    }
    public function startpage()
    {
      $admin = new Admin;
      $username = $_POST['username'];
      $password = $_POST['password'];
      if ($admin->checkCredentials($username,$password)) {
        $_SESSION['admin'] = $admin;
        $_SESSION['nav'] = $admin->getNav();
        View::adminload('adminpages', 'startpage');
      }
    }
    public function users()
    {
      $admin = new Admin;
      $_SESSION['admin_users'] = $admin->getAllUsers();
      View::adminload('adminuser', 'users');
    }
    public function products()
    {
      $admin = new Admin;
      $_SESSION['admin_products'] = $admin->getAllProducts();
      View::adminload('adminproducts', 'products');

    }
    public function insertNewProduct()
    {
      if (!isset($_POST['submit'])) {
        header('Location:' . $_SERVER['HTTP_REFERER']);
      }
      if(!isset($_FILES)){
  			header('Location: ' . $_SERVER['HTTP_REFERER']);
  		}else if($_FILES['img_url']['size'] == 0 || $_FILES['logo_img_url']['size'] == 0){
  			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err[]=Please choose the image.');
  		}
      $err = [];

      if (!isset($_POST['title']) ||
          !isset($_POST['description']) ||
          !isset($_POST['price']) ||
          !isset($_POST['brand'])) {
            $err [] = 'Missing fields';
      }

      $title = $_POST['title'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $brand = strtolower($_POST['brand']);

      $uploads_dir_img = './db_images';
      $uploads_dir_logo = './assets/logos';
      $file_tmp_logo_name = $_FILES['logo_img_url']['tmp_name'];
      $file_tmp_img_url_name = $_FILES['img_url']['tmp_name'];
      $file_logo_name = $_FILES['logo_img_url']['name'];
      $file_img_url_name = $_FILES['img_url']['name'];

      $file_ext_logo = explode('.', $file_logo_name);
      $file_ext_img = explode('.', $file_img_url_name);

  		$file_real_ext_logo = strtolower(end($file_ext_logo));
  		$file_real_ext_img  = strtolower(end($file_ext_img));

      $file_new_logo_name = time() .'.'.$file_real_ext_logo;
      $file_new_img_url_name = (time() + 10) .'.'.$file_real_ext_img;

      $file_new_destination_logo = $uploads_dir_logo. '/' .$file_new_logo_name;
      $file_new_destination_img = $uploads_dir_img. '/' .$file_new_img_url_name;

      $result_logo = move_uploaded_file($file_tmp_logo_name, $file_new_destination_logo);
      $result_img_url = move_uploaded_file($file_tmp_img_url_name, $file_new_destination_img);


      if (count($err > 0)) {
        header('Location:' . $_SERVER['HTTP_REFERER'] . '?err='.$err);
      }

      $admin = new Admin();
      if ($admin->insertProduct($title, $description, $price, '.'.$file_new_destination_img, '.'.$file_new_destination_logo, $brand)) {
        header('Location:' . $_SERVER['HTTP_REFERER'] . '?succ=Successfully added product');
      }
    }
    public function deleteProduct()
    {
      $id = $_GET['id'];
      $admin = new Admin();
      $admin->deleteProduct($id);
      header('Location:'. $_SERVER['HTTP_REFERER']);
    }
    public function deleteUser()
    {
      $id = $_GET['id'];
      $admin = new Admin();
      $admin->deleteUser($id);
      header('Location:'. $_SERVER['HTTP_REFERER']);
    }
    public function updateProductData()
    {
      $id = $_GET['id'];

      $product = new Product();
      $desc = $product->desc();

      $admin = new Admin();
      $product = new Product();
      $allForDesc = $admin->allForDesc();
      $product_data = $admin->getProductFromBase($id);
      $desc = $product->desc();

      $_SESSION['update_product'] = $product_data;
      $_SESSION['all_for_desc'] = $allForDesc;
      $_SESSION['desc_for_product'] = $desc;

      View::adminload('adminproducts', 'updateProductData');
    }
    public function updateProduct()
    {
      if (!isset($_POST['input_submit'])){
        header('Location: '. $_SERVER['HTTP_REFERER']);
      }

      $id = $_GET['id'];
      $title = $_POST['title'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $brand = strtolower($_POST['brand']);

      if ($_FILES['img_url']['size'] === 0){
        $img_url = $_POST['img_url'];
      }else {
        $uploads_dir_img = './db_images';
        $file_tmp_img_url_name = $_FILES['img_url']['tmp_name'];
        $file_img_url_name = $_FILES['img_url']['name'];
        $file_ext_img = explode('.', $file_img_url_name);
        $file_real_ext_img  = strtolower(end($file_ext_img));
        $file_new_img_url_name = (time() + 10) .'.'.$file_real_ext_img;
        $file_new_destination_img = $uploads_dir_img. '/' .$file_new_img_url_name;
        $result_img_url = move_uploaded_file($file_tmp_img_url_name, $file_new_destination_img);
      }

      if ($_FILES['logo_img_url']['size'] === 0){
        $logo_img_url = $_POST['logo_img_url'];
      }else {
        $uploads_dir_logo = './assets/logos';
        $file_tmp_logo_name = $_FILES['logo_img_url']['tmp_name'];
        $file_logo_name = $_FILES['logo_img_url']['name'];
        $file_ext_logo = explode('.', $file_logo_name);
        $file_real_ext_logo = strtolower(end($file_ext_logo));
        $file_new_logo_name = time() .'.'.$file_real_ext_logo;
        $file_new_destination_logo = $uploads_dir_logo. '/' .$file_new_logo_name;
        $result_logo = move_uploaded_file($file_tmp_logo_name, $file_new_destination_logo);
      }
      $admin = new Admin();
      if ($_FILES['logo_img_url']['size'] !== 0) {
        $update = $admin->updateProductInBase($title, $description, $price, $img_url,'.'.$file_new_destination_logo, $brand, $id);
      }else if($_FILES['img_url']['size'] !== 0){
        $update = $admin->updateProductInBase($title, $description, $price, '.'.$file_new_destination_img, $logo_img_url, $brand, $id);
      }else if ($_FILES['img_url']['size'] !== 0 && $_FILES['logo_img_url']['size'] !== 0) {
        $update = $admin->updateProductInBase($title, $description, $price, '.'.$file_new_destination_img, '.'.$file_new_destination_logo, $brand, $id);
      }else{
        $update = $admin->updateProductInBase($title, $description, $price, $img_url, $logo_img_url, $brand, $id);
      }
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    public function updateUser()
    {
      if (!isset($_POST['submit'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }

      $id = $_GET['id'];
      $first_name = trim($_POST['first_name']);
      $last_name = trim($_POST['last_name']);
      $username = trim($_POST['username']);
      $email = trim($_POST['email']);
      $address = trim($_POST['address']);
      $postal_code = trim($_POST['postal_code']);

      if  (!isset($first_name) || !isset($last_name) || !isset($username) || !isset($email) || !isset($address) || !isset($postal_code)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }

      $admin = new Admin();
      if ($admin->updateUserInBase ($first_name, $last_name, $username, $email, $address, $postal_code, $id)) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?succ=Successfully updated' );
      }else{
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err=Something went wrong please try again' );
      }
    }
    public function updateProductDescription()
    {
      if (!isset($_POST['submit'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }
      var_dump($_POST);

      $desc_value = trim($_POST['desc_value']);

      if (empty($desc_value)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }
    }
    public function updateNavPageLoad()
    {
      View::adminload('adminpages', 'updateNav');
    }
    public function updateNav()
    {
      if (!isset($_POST['submit'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }

      $args = $_POST['nav'];

      foreach ($args as  $value) {
        if (trim($value) == '') {
          unset($value);
        }
      }

      if (count($args) < 4) {
        header('Location: ' .$_SERVER['HTTP_REFERER'] . '?err=You must to choose an option');
      }

      $admin = new Admin();
      if($admin->updateNavInBase($args)){
        header('Location: ' .$_SERVER['HTTP_REFERER']);
      }else {
        header('Location: ' .$_SERVER['HTTP_REFERER'] . '?err=something went wrong');
      }
    }
}
