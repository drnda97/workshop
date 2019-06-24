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
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      if ($admin->checkCredentials($email,$username,$password)) {
        $_SESSION['admin'] = $admin;
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

      if (empty($_POST['title']) ||
          empty($_POST['description']) ||
          empty($_POST['price']) ||
          empty($_POST['brand'])) {
            $err [] = 'Empty fields';
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


      // if (count($err > 0)) {
      //   $error_log = implode('', $err);
      //   header('Location:' . $_SERVER['HTTP_REFERER'] . '?err='.$error_log);
      // }

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
}
