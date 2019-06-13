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

    $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
    // make quantity a minimum of 1
    $quantity=$quantity<=0 ? 1 : $quantity;
    // add new item on array
    $cart_item=array(
        'quantity'=>$quantity
    );
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }
   // check if the item is in the array, if it is, do not add
   if (count($_SESSION['cart']) === 0) {
     $res = $product->shoping($_GET['id']);
     array_push($_SESSION['cart'], $res);
   }

   foreach ($_SESSION['cart'] as  $value) {
      if (in_array($id, $value)) {
        $_SESSION['msg'] = 'The product is alredy in cart';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      }else{
         $res = $product->shoping($_GET['id']);
         $_SESSION['msg'] = 'The product was successfully added to cart';
         array_push($_SESSION['cart'], $res);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
  }
}
