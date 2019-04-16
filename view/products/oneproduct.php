<?php  $product = $this->data['product']; ?>
<?php  $_SESSION['product'] = $this->data['product']; ?>
<div class="product clearfix">
  <h1><?php echo $product['title']; ?></h1>
  <img src="<?php echo $product['img_url']; ?>" alt="product-image">
  <span>Cena: <?php echo $product['price']; ?>  din</span>
  <a href="http://localhost/igorjanosevic/workshop/products/bracket">Dodaj u korpu</a>
  <p><?php echo $product['description']; ?></p>
</div>
