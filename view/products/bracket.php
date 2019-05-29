<?php $_SESSION['cart-item'] = $this->data['items']; ?>
<?php $cntr = 0;  ?>
<?php if (!isset($_SESSION['cart-item'])): ?>
  <div class="empty-cart">
    <h1>Vasa korpa je prazna</h1>
  </div>
<?php else :  ?>
  <div class="cart clearfix">
    <h1>Vasi proizvodi</h1>
      <div class="one-product clearfix">
        <table border="1" cellpadding="15" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Slika</th>
              <th>Ime proizvoda</th>
              <th>Opis</th>
              <th>Kolicina</th>
              <th>Cena</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo ++$cntr; ?></td>
              <td><img src="<?php echo $_SESSION['cart-item']['img_url']; ?>" alt="product-image" class="img-in-bracket"></td>
              <td><?php echo $_SESSION['cart-item']['title']; ?></td>
              <td><?php echo $_SESSION['cart-item']['description']; ?></td>
              <td><input type="text" name="quantity" value="1"></td>
              <td>Cena: <?php echo $_SESSION['cart-item']['price']; ?>  din</td>
          </tr>
          <tr>
            <td colspan="4">Ukupno:</td>
            <td colspan="4"><?php echo $_SESSION['cart-item']['price']; ?> din</td>
          </tr>
          </tbody>
        </table>
      </div>
      <a href="http://localhost/igorjanosevic/workshop/users/order" class="order"><i class="fas fa-shipping-fast"></i>Na porudzbinu</a>
  </div>
<?php endif; ?>
