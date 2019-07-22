<?php
$product_data = $_SESSION['update_product'];
$update_desc = $_SESSION['all_for_desc'];
$desc_for_product = $_SESSION['desc_for_product'];
?>
<h1>Update product info</h1>
<form  class="input_form" action="http://localhost/igorjanosevic/workshop/admin/updateProduct?id<?= $product_data['id']; ?> " method="post" enctype="multipart/form-data">
<?php foreach ($product_data as $key => $value): ?>
    <?php if ($key === 'id'): ?>
      <?php continue; ?>
    <?php endif; ?>
    <?php if (strpos($key, 'url')): ?>
      <div class="form-controll">
        <legend><?= $key;  ?></legend>
        <img src="<?= $value; ?>" >
        <small>Choose image to replace</small>
        <input type="hidden" name="<?= $key; ?>" value="<?= $value; ?>">
        <input type="file" name="<?= $key; ?>" value="<?= $value; ?>">
      </div>
      <?php continue; ?>
    <?php endif; ?>
    <div class="form-controll">
      <legend><?= $key;  ?></legend>
      <input type="text" name="<?= $key; ?>" value="<?= $value; ?>">
    </div>
<?php endforeach; ?>
<input type="submit" name="input_submit" value="Submit" class="input_submit">
</form>
<h1>Product Description</h1>
<?php if (count($desc_for_product) === 0): ?>
  <h2>This product don't have a description</h2>
<?php endif; ?>
<?php foreach ($desc_for_product as $value): ?>
  <?php foreach ($value as $key => $desc): ?>
    <?php if ($key === 'desc_name'): ?>
      <h4><?= $desc; ?></h4>
      <?php continue; ?>
    <?php endif; ?>
      <p class="desc_p"><?= $desc; ?></p>
  <?php endforeach; ?>
<?php endforeach; ?>
<h1>Select the descrition for product to update or input</h1>
<form class="desc_form" action="http://localhost/igorjanosevic/workshop/admin/updateProductDescription" method="post" name="desc_form">
  <div class="form-controll-desc">
    <select name="desc[]">
    <?php foreach ($update_desc as $description): ?>
      <?php foreach ($description as  $value): ?>
          <option value="<?= $value; ?>" name="desc_option"><?= $value; ?></option>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </select>
  <input type="text" name="desc_value" placeholder="Enter description">
</div>
<a href="#" class="add_new_desc_form_btn">New description+</a>
<input type="submit" name="desc_submit" value="submit" class="desc_submit">
</form>
