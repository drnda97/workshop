<?php

class Sorting
{
      public static function sortProducts($method, $products)
      {
        $products = array_filter($products, function ($data) use ($method){
      	if (isset($method['manufacturer'])) {
      			foreach ($method['manufacturer'] as $value) {
      				if ($data['brand'] === $value) {
      						return $data;
      				}
      			}
      		}else{
      			return $data;
      		}
      	});
      	return $products;
      }
}
