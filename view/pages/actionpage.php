<div class="action-page clearfix">
  <h1>Proizvodi na akciji</h1>
  <?php foreach ($this->data['random'] as $product) : ?>
    <form action="http://localhost/igorjanosevic/workshop/products/bracket?action=add&id=<?php echo $product['id']; ?>" method="post">
        <div class="cards clearfix">
            <img src="<?php echo $product['img_url']; ?>" alt="product-image">
          <h4><?php echo $product['title']; ?></h4>
          <span>Cena: <?php echo $product['price'] - ((10 *$product['price']) / 100) ?>  din</span>
          <input type="submit" name="add" value="Dodaj u korpu" class="product-btn">
          <p><?php echo $product['description']; ?></p>
        </div>
      </form>
    <?php endforeach; ?>
  </div>
