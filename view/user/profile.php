<?php if(!isset($_SESSION['user'])) : ?>
  <?php header('Location: ' . $_SERVER['HTTP_REFERER']); ?>
<?php endif; ?>
<form action="http://localhost/igorjanosevic/workshop/users/checkuser" method="post" class="">
    <input type="hidden" name="fn" value="logout">
    <input type="submit" name="submit" value="Logout">
</form>
