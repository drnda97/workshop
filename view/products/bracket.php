<?php $_SESSION['cart-item'] = $this->data['items']; ?>
<?php if (!isset($_SESSION['cart-item'])): ?>
  <div class="empty-cart">
    <h1>Vasa korpa je prazna</h1>
  </div>
<?php else :  ?>
  <div class="cart">
    <h1>Vasi proizvodi</h1>
      <div class="product clearfix">
        <h1><?php echo $_SESSION['cart-item']['title']; ?></h1>
        <img src="<?php echo $_SESSION['cart-item']['img_url']; ?>" alt="product-image">
        <span>Cena: <?php echo $_SESSION['cart-item']['price']; ?>  din</span>
        <p><?php echo $_SESSION['cart-item']['description']; ?></p>
      </div>
  </div>
<?php endif; ?>
// odradi sutra action page dodaj u korpu
//dodaj linkove na slikama na proizvodima na akciji
//zavrsi korpu
