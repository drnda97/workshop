<?php
class Product
{
  public function getAll()
  {
    global $conn;
    $query = 'select * from mockingbird.products';
    $res = $conn->query($query);
    $products = [];
		while ($product = $res->fetch_assoc()) {
			$products[] = $product;
		}
		return $products;
  }
  public function getOne($param)
  {
    global $conn;
    $query = 'select * from mockingbird.products where id = ' . $param;
    $res = $conn->query($query);
    $product = $res->fetch_assoc();
		return $product;
  }
  public function returnRand()
  {
    global $conn;
    $query = 'select * from mockingbird.products where RAND() <= 0.5 limit 3';
    $res = $conn->query($query);
    $random = [];
    while($product = $res->fetch_assoc()){
      $random[] = $product;
    }
		return $random;
  }
  public function shoping()
  {
    global $conn;
    $query = 'select * from products where id = "'.$_SESSION['product']['id'].'"';
    var_dump($_SESSION['product']['id']);
    $res = $conn->query($query);
    $products = [];
    while($product == $res->fetch_assoc()){
      $products[] = $product;
    }
    return $items;
  }
}
