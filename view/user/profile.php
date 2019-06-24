<?php if(!isset($_SESSION['user'])) : ?>
  <?php header('Location: ' . $_SERVER['HTTP_REFERER']); ?>
<?php endif; ?>
<?php $img_url =  $_SESSION['user']->profile_img_url; ?>
  <?php if (isset($_GET['err'])) : ?>
    <div class="err">
      <?php foreach($_GET['err'] as $err) : ?>
        <?php echo $err; ?>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
<div id="main_profile">
  <div class="profile-img">
      <img src=".<?php echo $img_url; ?>" alt="no_profile_img">
  <form action="http://localhost/igorjanosevic/workshop/users/editprofileimg" method="post" enctype="multipart/form-data">
    <input type="file" name="upload_image" value="upload_image" class="input-image">
    <input type="submit" name="submit" value="Upload" class="image-input">
  </form>
  </div>
  <main class="profile-main">
    <small>Ime:</small>
    <p><?php echo $_SESSION['user']->first_name .' '. $_SESSION['user']->last_name;?></p>
    <small>Email:</small>
    <p><?php echo $_SESSION['user']->email;  ?></p>
    <small>Username:</small>
    <p><?php echo $_SESSION['user']->username;  ?></p>
    <small>Adresa:</small>
    <?php if ($_SESSION['user']->address !== null): ?>
      <p><?php echo $_SESSION['user']->address;  ?></p>
    <?php else:?>
      <input type="text" name="address" id="address" placeholder="Unesi adresu" class="profile-input">
    <?php endif; ?>
    <small>Postanski broj:</small>
    <?php if ($_SESSION['user']->postal_code !== null): ?>
      <p><?php echo $_SESSION['user']->postal_code;  ?></p>
    <?php else:?>
        <input type="text" name="postal_code" id="postal_code" placeholder="Unesi postanski broj" class="profile-input">
    <?php endif; ?>
  </main>
  <a href="#" class="edit">Edit <i class="fas fa-edit"></i></a>
  <form action="http://localhost/igorjanosevic/workshop/users/checkuserlogout" method="post" class="">
      <input type="submit" name="submit" value="Logout">
</form>
</div>
<div class="secret">
  <form action="http://localhost/igorjanosevic/workshop/users/editinfo?id=<?php echo $_SESSION['user']->id; ?>" method="post">
    <div class="form-control">
      <legend>Ime:</legend>
      <input type="text" name="first_name" value="<?php echo $_SESSION['user']->first_name;?>">
    </div>
    <div class="form-control">
      <legend>Prezime:</legend>
      <input type="text" name="last_name" value="<?php echo $_SESSION['user']->last_name; ?>">
    </div>
    <div class="form-control">
      <legend>Email:</legend>
      <input type="text" name="email" value="<?php echo $_SESSION['user']->email; ?>">
    </div>
    <div class="form-control">
      <legend>Username:</legend>
      <input type="text" name="username" value="<?php echo $_SESSION['user']->username; ?>">
    </div>
    <div class="form-control">
      <legend>Adresa:</legend>
      <input type="text" name="address" value="<?php echo $_SESSION['user']->address; ?>">
    </div>
    <div class="form-control">
      <legend>Postanski broj:</legend>
      <input type="text" name="postal_code" value="<?php echo $_SESSION['user']->postal_code; ?>">
    </div>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
