<?php if (!isset($_SESSION['admin'])): ?>
  <?php header('Location: http://localhost/igorjanosevic/workshop'); ?>
<?php endif; ?>
<h1>Welcome to startpage</h1>
<h2>Nav table</h2>
<table border="1" cellpadding="15" cellspacing="0">
  <thead>
    <tr>
      <th>id</th>
      <th>page_option</th>
      <th>value</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($_SESSION['nav'] as  $value): ?>
      <tr>
        <td><?= $value['id']; ?></td>
        <td><?= $value['page_option']; ?></td>
        <td><?= $value['value']; ?></td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="3"><a href="http://localhost/igorjanosevic/workshop/admin/updateNavPageLoad">Update</a></td>      
    </tr>
  </tbody>
</table>
