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
  public function shoping($id)
  {
    global $conn;
    $query = 'select * from products where id = '. $id;
    $res = $conn->query($query);
    $product = $res->fetch_assoc();
    return $product;
  }
  public function desc()
  {
    global $conn;
    $query = 'select desc_name.desc_name, desc_value.desc_value ';
    $query .= 'from desc_value ';
    $query .= 'join products ';
    $query .= 'on desc_value.id_product = products.id ';
    $query .= 'join desc_name ';
    $query .= 'on desc_value.id_desc_name = desc_name.id ';
    $query .= 'where products.id = ' . $_GET['id'];
    $res = $conn->query($query);
    $description = array();
    while ($desc = $res->fetch_assoc()) {
      array_push($description, $desc);
    }
    return $description;
  }
}
