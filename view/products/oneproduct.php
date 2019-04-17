<?php  $product = $this->data['product'];?>
<form action="http://localhost/igorjanosevic/workshop/products/bracket?action=add&id=<?php echo $product['id']; ?>" method="post">
  <div class="product clearfix">
    <h1><?php echo $product['title']; ?></h1>
    <img src="<?php echo $product['img_url']; ?>" alt="product-image">
    <span>Cena: <?php echo $product['price']; ?>  din</span>
    <input type="submit" name="add" value="Dodaj u korpu">
    <p><?php echo $product['description']; ?></p>
  </div>
</form>
