<div class="action-page clearfix">
  <h1>Proizvodi na akciji</h1>
  <?php foreach ($this->data['random'] as $product) : ?>
    <div class="cards clearfix">
        <img src="<?php echo $product['img_url']; ?>" alt="product-image">
      <h4><?php echo $product['title']; ?></h4>
      <span>Cena: <?php echo $product['price'] - ((10 *$product['price']) / 100) ?>  din</span>
      <a href="http://localhost/igorjanosevic/workshop/products/oneproduct?id=<?php echo $product['id']; ?>" class="product-btn">Dodaj u korpu</a>
      <p><?php echo $product['description']; ?></p>
    </div>
  <?php endforeach; ?>
</div>
