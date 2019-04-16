<?php if (!isset($_SESSION['cart-item'])): ?>
  <div class="empty-cart">
    <h1>Vasa korpa je prazna</h1>
  </div>
<?php else :  ?>
  <div class="cart">
    <h1>Vasi proizvodi</h1>
      <?php var_dump($_SESSION); ?>
  </div>
<?php endif; ?>
