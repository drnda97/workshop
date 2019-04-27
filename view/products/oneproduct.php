<?php  $product = $this->data['product'];?>
<?php  $desc = $this->data['desc'];?>
<form action="http://localhost/igorjanosevic/workshop/products/bracket?action=add&id=<?php echo $product['id']; ?>" method="post">
  <div class="product clearfix">
    <h1><?php echo $product['title']; ?></h1>
    <img src="<?php echo $product['img_url']; ?>" alt="product-image" class="product-image">
    <span>Cena: <?php echo $product['price']; ?>  din</span>
    <img src="<?php echo $product['logo_img_url']; ?>" alt="logo" class="product-logo">
    <input type="submit" name="add" value="Dodaj u korpu" class="one-product-input">
    <div class="description clearfix">
      <?php foreach ($desc as $key => $name): ?>
        <?php if ($key % 2 > 0): ?>
        <?php foreach ($name as $value): ?>
          <p style="background-color:#f1f1f1" class="even"><?php echo $value; ?></p>
        <?php endforeach; ?>
      <?php else: ?>
        <?php foreach ($name as $value): ?>
          <p><?php echo $value; ?></p>
        <?php endforeach; ?>
      <?php endif; ?>
      <?php endforeach; ?>
  </div>
  </div>
</form>
