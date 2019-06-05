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
}
