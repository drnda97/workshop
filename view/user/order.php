<!-- <script type="text/javascript">
  console.log(prompt('Da li zelite da zadrzite svoje podatke'));
</script> -->
<div class="order-div">
  <form action="" method="post">
    <legend>Ime porucioca: </legend>
    <?php if (isset($_SESSION['user']->first_name) && isset($_SESSION['user']->last_name)) : ?>
      <h2><?php echo $_SESSION['user']->first_name .' '. $_SESSION['user']->last_name; ?> <a href="#" class="edit"><small><i class="fas fa-edit"></i></small></a></h2>
    <?php else: ?>
      <input type="text" name="name" value="">
    <?php endif; ?>
    <legend>Adresa: </legend>
    <?php if (isset($_SESSION['user']->address)): ?>
      <h2><?php $_SESSION['user']->address; ?> <a href="#" class="edit"><small><i class="fas fa-edit"></i></small></a></h2>
    <?php else: ?>
      <input type="text" name="addres" value="">
    <?php endif; ?>
    <legend>Postanski broj: </legend>
    <?php if (isset($_SESSION['user']->postal_code)): ?>
      <h2><?php $_SESSION['user']->postal_code; ?> <a href="#" class="edit"><small><i class="fas fa-edit"></i></small></a></h2>
    <?php else: ?>
      <input type="text" name="addres" value="">
    <?php endif; ?>
    <button type="button" name="button" class="order-btn">Poruci</button>
  </form>
</div>
