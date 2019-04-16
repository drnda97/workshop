<aside class="product-aside clearfix">
  <form action="http://localhost/igorjanosevic/workshop/products/sortproducts" method="post" class="" >
    <h3>Proizvodjaci</h3>
    <p>
      <label>
        <input type="checkbox" name="intel"  value="intel" <?php //echo in_array('altec-lansing', $manufacturer)? 'checked' : ''; ?>>
        <span>Intel</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="amd"  value="amd" <?php //echo in_array('altec-lansing', $manufacturer)? 'checked' : ''; ?>>
        <span>AMD</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="acer"  value="acer" <?php //echo in_array('altec-lansing', $manufacturer)? 'checked' : ''; ?>>
        <span>Acer</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="asus"  value="asus" <?php //echo in_array('altec-lansing', $manufacturer)? 'checked' : ''; ?>>
        <span>Asus</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="rog"  value="rog" <?php //echo in_array('altec-lansing', $manufacturer)? 'checked' : ''; ?>>
        <span>ROG</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="dell"  value="dell" <?php //echo in_array('altec-lansing', $manufacturer)? 'checked' : ''; ?>>
        <span>Dell</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="foxcon"  value="acer" <?php //echo in_array('altec-lansing', $manufacturer)? 'checked' : ''; ?>>
        <span>Foxconn</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="hp"  value="hp" <?php //echo in_array('altec-lansing', $manufacturer)? 'checked' : ''; ?>>
        <span>HP</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="lenovo"  value="lenovo" <?php //echo in_array('altec-lansing', $manufacturer)? 'checked' : ''; ?>>
        <span>Lenovo</span>
      </label>
    </p>
    <h3>Procesori</h3>
    <p>
      <label>
        <input type="checkbox" name="intel"  value="intel" <?php //echo in_array('altec-lansing', $manufacturer)? 'checked' : ''; ?>>
        <span>Intel</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" name="amd"  value="amd" <?php //echo in_array('altec-lansing', $manufacturer)? 'checked' : ''; ?>>
        <span>AMD</span>
      </label>
    </p>
  </form>
</aside>
<main class="product-main clearfix">
  <h1>products </h1>
  <?php foreach ($this->data['products'] as $product) : ?>
    <div class="card">
      <a href="http://localhost/igorjanosevic/workshop/products/oneproduct?id=<?php echo $product['id']; ?>">
        <img src="<?php echo $product['img_url']; ?>" alt="product-image">
      </a>
      <h4><?php echo $product['title']; ?></h4>
      <p><?php echo $product['description']; ?></p>
      <span>Cena: <?php echo $product['price']; ?>  din</span>
      <a href="http://localhost/igorjanosevic/workshop/products/oneproduct?id=<?php echo $product['id']; ?>" class="product-btn">Detaljnije</a>
    </div>
  <?php endforeach; ?>
</main>
