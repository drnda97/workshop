<?php if(!isset($_SESSION['user'])) : ?>
  <?php header('Location: ' . $_SERVER['HTTP_REFERER']); ?>
<?php endif; ?>
<div class="profile-img">
  <img src="../user_images/avatar.png" alt="no_profile_img">
  <a href="#"><i class="fas fa-camera"></i> Promeni sliku</a>
</div>
<main class="profile-main">
  <small>Ime:</small>
    <p><?php echo $_SESSION['user']->first_name .' '. $_SESSION['user']->last_name;?> <a href="#" class="edit"><small><i class="fas fa-edit"></i></small></a></p>

    <small>Email:</small>
    <p><?php echo $_SESSION['user']->email;  ?><a href="#" class="edit"><small><i class="fas fa-edit"></i></small></a></p>
    <small>Username:</small>
    <p><?php echo $_SESSION['user']->username;  ?><a href="#" class="edit"><small><i class="fas fa-edit"></i></small></a></p>
    <?php if ($_SESSION['user']->address !== null): ?>
      <p><?php echo $_SESSION['user']->address;  ?><a href="#" class="edit"><small><i class="fas fa-edit"></i></small></a></p>
    <?php else:?>
      <input type="text" name="address" id="address" placeholder="Unesi adresu" class="profile-input">
    <?php endif; ?>
    <?php if ($_SESSION['user']->postal_code !== null): ?>
      <p><?php echo $_SESSION['user']->postal_code;  ?><a href="#" class="edit"><small><i class="fas fa-edit"></i></small></a></p>
    <?php else:?>
      <input type="text" name="postal_code" id="postal_code" placeholder="Unesi postanski broj" class="profile-input">
    <?php endif; ?>
</main>
<form action="http://localhost/igorjanosevic/workshop/users/checkuserlogout" method="post" class="">
    <input type="hidden" name="fn" value="logout">
    <input type="submit" name="submit" value="Logout">
</form>
//Zavrsi upload slike i editovanje adrese i postal_code
