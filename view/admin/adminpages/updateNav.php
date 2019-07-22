<?php $cntr = 1; ?>
<h1>Poredjaj stranice po redu</h1>
<form name="update_nav_form" action="http://localhost/igorjanosevic/workshop/admin/updateNav" method="post">
<?php for ($i=0; $i < count($_SESSION['nav']); $i++) { ?>
  <ul>
    <li>
      <label for="select"><?= $cntr++; ?></label>
      <select id="box<?= $i; ?> " name="nav[]" class="nav_select">
        <option>&nbsp;</option>
        <?php foreach ($_SESSION['nav'] as $value) : ?>
          <option value="<?= $value['page_option']; ?>"><?= $value['page_option']; ?></option>
        <?php endforeach; ?>
      </select>
    </li>
  </ul>
  <?php
  } ?>
<input type="submit" name="submit" value="Submit">
</form>
