<?php $cntr = 0;  ?>
<?php $total = 0;  ?>
<?php $prices = array(); ?>
<?php $quantity = (isset($_POST['quantity']) && $_POST['quantity'] != 0) ? $_POST['quantity'] : 1;  ?>
<?php $id_product = (isset($_GET['id'])) ? $_GET['id'] : '';  ?>
<?php if (!isset($_SESSION['cart'])): ?>
  <div class="empty-cart">
    <h1>Vasa korpa je prazna</h1>
  </div>
<?php else :  ?>
  <div class="cart clearfix">
    <h1>Vasi proizvodi</h1>
      <div class="one-product clearfix">
        <table cellpadding="15" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Slika</th>
              <th>Ime proizvoda</th>
              <th>Opis</th>
              <th>Kolicina</th>
              <th>Ukloni</th>
              <th>Cena</th>
          </tr>
          </thead>
          <tbody>
            <?php foreach ($_SESSION['cart'] as $product): ?>
              <tr>
                <td><?php echo ++$cntr; ?></td>
                <td><img src="<?php echo $product['img_url']; ?>" alt="product-image" class="img-in-bracket"></td>
                <td><?php echo $product['title']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <form class="" action="http://localhost/igorjanosevic/workshop/products/bracket?action=quantity_updated&id=<?php echo $product['id']; ?>" method="post">
                  <td><input type="number" name="quantity" value="1">
                  <input type="submit" name="submit" value="Update"></td>
                </form>
                <td><a href="http://localhost/igorjanosevic/workshop/products/removeFromCart?cntr=<?php echo $cntr; ?>" class="remove_btn">Obrisi</a></td>
                <td>Cena: <?php
                if ($id_product === $product['id']) {
                  echo number_format(floatval($product['price']) * $quantity, 3);
                }else{
                  echo $product['price'];
                }
                ?>  din</td>
            </tr>
          <?php endforeach; ?>
          <tr>
            <td colspan="4">Ukupno:</td>
            <td colspan="4"><?php
              foreach ($_SESSION['cart'] as $value) {
                 $total += $value['price'];
              }
              echo number_format($total, 3);
             ?> din</td>
          </tr>
          </tbody>
        </table>
      </div>
      <a href="http://localhost/igorjanosevic/workshop/users/order" class="order"><i class="fas fa-shipping-fast"></i>Na porudzbinu</a>
  </div>
<?php endif; ?>
