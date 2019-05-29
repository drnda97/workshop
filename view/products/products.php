<?php
$this->data['products'] = Sorting::sortProducts($_GET, $this->data['products']);
$manufacturer = [];
$rating = [];
if (isset($_GET['manufacturer'])) {
	$manufacturer = $_GET['manufacturer'];
}
if (isset($_GET['price'])) {
	$price = $_GET['price'];
}
?><div class="product-background">
	<aside class="product-aside clearfix">
	   <form  name="sortProducts">

	    <h3>Proizvodjaci</h3>
	    <p>
	      <label>
	        <input type="checkbox" name="manufacturer[]"  value="intel" <?php echo in_array('intel', $manufacturer)? 'checked' : ''; ?>>
	        <span>Intel</span>
	      </label>
	    </p>
	    <p>
	      <label>
	        <input type="checkbox" name="manufacturer[]"  value="amd" <?php echo in_array('amd', $manufacturer)? 'checked' : ''; ?>>
	        <span>AMD</span>
	      </label>
	    </p>
	    <p>
	      <label>
	        <input type="checkbox" name="manufacturer[]"  value="acer" <?php //echo in_array('acer', $manufacturer)? 'checked' : ''; ?>>
	        <span>Acer</span>
	      </label>
	    </p>
	    <p>
	      <label>
	        <input type="checkbox" name="manufacturer[]"  value="msi" <?php echo in_array('msi', $manufacturer)? 'checked' : ''; ?>>
	        <span>MSI</span>
	      </label>
	    </p>
	    <p>
	      <label>
	        <input type="checkbox" name="manufacturer[]"  value="rog" <?php //echo in_array('rog', $manufacturer)? 'checked' : ''; ?>>
	        <span>ROG</span>
	      </label>
	    </p>
	    <p>
	      <label>
	        <input type="checkbox" name="manufacturer[]"  value="dell" <?php //echo in_array('dell', $manufacturer)? 'checked' : ''; ?>>
	        <span>Dell</span>
	      </label>
	    </p>
	    <p>
	      <label>
	        <input type="checkbox" name="manufacturer[]"  value="gigabyte" <?php echo in_array('gigabyte', $manufacturer)? 'checked' : ''; ?>>
	        <span>Gigabyte</span>
	      </label>
	    </p>
	    <p>
	      <label>
	        <input type="checkbox" name="manufacturer[]"  value="hp" <?php //echo in_array('hp', $manufacturer)? 'checked' : ''; ?>>
	        <span>HP</span>
	      </label>
	    </p>
	    <p>
	      <label>
	        <input type="checkbox" name="manufacturer[]"  value="lenovo" <?php //echo in_array('lenovo', $manufacturer)? 'checked' : ''; ?>>
	        <span>Lenovo</span>
	      </label>
	    </p>
	    <h3>Cena</h3>
	    <p>
	      <label>
	        <input type="checkbox" name="price"  value="rastuca" <?php //echo in_array('rastuca', $price)? 'checked' : ''; ?>>
	        <span>Rastuca</span>
	      </label>
	    </p>
	    <p>
	      <label>
	        <input type="checkbox" name="price"  value="opadajuca" <?php //echo in_array('opadajuca', $price)? 'checked' : ''; ?>>
	        <span>Opadajuca</span>
	      </label>
	    </p>
	    <button type="submit" name="submit_form" class="filter-btn">Filter</button>
	  </form>
	</aside>
	<main class="product-main clearfix">
	  <h1>products </h1>
	  <?php foreach ($this->data['products'] as $product) : ?>
	    <div class="card">
	      <a href="http://localhost/igorjanosevic/workshop/products/oneproduct?id=<?php echo $product['id']; ?>">
	        <img src="<?php echo $product['img_url']; ?>" alt="product-image" class="product-image">
	      </a>
	      <h4><?php echo $product['description']; ?></h4>
	      <span><?php echo $product['price']; ?>  din</span>
				<section class="btn-section">
					<a href="http://localhost/igorjanosevic/workshop/products/bracket?action=add&id=<?php echo $product['id']; ?>" class="product-btn"><i class="fas fa-shopping-cart"></i></a>
					<a href="http://localhost/igorjanosevic/workshop/products/bracket?action=add&id=<?php echo $product['id']; ?>" class="hidden-p">Dodaj u</a>
				</section>
				<a href="http://localhost/igorjanosevic/workshop/products/oneproduct?id=<?php echo $product['id']; ?>"><div class="more-info">More info</div></a>
	    </div>
	  <?php endforeach; ?>
		<a href="#" class="go-to-btn" id="back-to-top"><i class="fas fa-arrow-up"></i></a>
	</main>
</div>
