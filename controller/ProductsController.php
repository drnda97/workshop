<?php

class ProductsController
{

  public function startupage()
  {
    $view = new View();
    $product = new Product();
    $view->data['products'] = $product->getAll();
    $view->load('products', 'products');
  }
  public function oneProduct()
  {
    $view = new View();
    $product = new Product();
    $view->data['product'] = $product->getOne($_GET['id']);
    $view->data['desc'] = $product->desc();
    $view->load('products', 'oneproduct');
  }
  public function bracket()
  {
    $view = new View();
    $product = new Product();
    $view->load('products', 'bracket');
  }
  public function addToCart()
  {
    $product = new Product();
    $view = new View();
    // get the product id
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    // if it's not set, set the session to array
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }
    if (count($_SESSION['cart']) === 0) {
      $res = $product->shoping($_GET['id']);
      array_push($_SESSION['cart'], $res);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    // check if the item is in the array, if it is, do not add
    foreach ($_SESSION['cart'] as  $value) {
      if (in_array($id, $value)) {
        // $_SESSION['msg'] = 'The product is alredy in cart';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
      }else{
         $res = $product->shoping($_GET['id']);
         // $_SESSION['msg'] = 'The product '.$res['title'].' was successfully added to cart';
         array_push($_SESSION['cart'], $res);
         header('Location: ' . $_SERVER['HTTP_REFERER']);
         break;
      }
    }
  }
  public function removeFromCart(){
    $cntr = $_GET['cntr'] - 1;
    if (count($_SESSION['cart']) === 1) {
      unset($_SESSION['cart']);
    }
    sort($_SESSION['cart']);
    unset($_SESSION['cart'][$cntr]);
  header('Location: '. $_SERVER['HTTP_REFERER']);
  }
}
