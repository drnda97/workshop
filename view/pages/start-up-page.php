<main class="clearfix">
    <div class="bcgr-img">
      <!-- <h1>Najveca prodavnica kompjuterskih kompenenti u Srbiji</h1> -->
    </div>
    <div class="welcome clearfix">
      <h1>Dobrodosli na moj website computer shop</h1>
      <div class="welcome-half">
        <img src="./assets/images/welcome-img.png" alt="logo-sitea">
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
      <div class="desc clearfix">
        <h1>Na akciji ove nedelje 10% popusta na sledece proizvode</h1>
        <?php foreach ($this->data['random'] as $product): ?>
          <?php  $img_url = substr($product['img_url'], 1); ?>
          <div class="inner-div clearfix">
            <span class="inner-span clearfix">
              <a href="http://localhost/igorjanosevic/workshop/pages/actionpage">
                <img src="<?php echo $img_url; ?>" alt="">
              </a>
            </span>
            <p><?php echo $product['title'] ?></p>
            <p><?php echo $product['description'] ?></p>
            <p>Cena: <?php echo $product['price'] - ((10 *$product['price']) / 100) ?> din</p>
          </div>
        <?php endforeach; ?>
      <a href="http://localhost/igorjanosevic/workshop/pages/actionpage" class="btn-start">Pogledaj jos</a>
    </div>
    <div class="brands clearfix">
      <h1>Brendovi koje mozete naci kod nas</h1>
      <div class="logos clearfix">
        <img src="./assets/logos/acer.png" alt="logo-firme">
        <img src="./assets/logos/AMD.png" alt="logo-firme">
        <img src="./assets/logos/asus-logo.png" alt="logo-firme">
        <img src="./assets/logos/asus-rog.png" alt="logo-firme">
        <img src="./assets/logos/dell.png" alt="logo-firme">
        <img src="./assets/logos/foxconn.png" alt="logo-firme">
        <img src="./assets/logos/Hp.png" alt="logo-firme">
        <img src="./assets/logos/inte-logo.png" alt="logo-firme">
        <img src="./assets/logos/lenovo.png" alt="logo-firme">
      </div>
    </div>
</main>
