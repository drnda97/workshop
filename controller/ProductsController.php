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
    $view->data['items'] = $product->shoping();
    $view->load('products', 'bracket');
  }
  public function sortproducts(){
    var_dump('Sta se pije');
  }
}
