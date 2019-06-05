<h1>Aside</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
    </tr>
  </thead>
</table>
<h1>Main</h1>
<h2>Svi proizvodi</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
      <th scope="col">img_url</th>
      <th scope="col">logo_img_url</th>
      <th scope="col">brand</th>
      <th scope="col" colspan="2">Radnja</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($_SESSION['admin_products'] as $value): ?>
      <tr>
        <td scope="row"><?php echo $value['id'] ?></td>
        <td><?php echo $value['title'] ?></td>
        <td><?php echo $value['description'] ?></td>
        <td><?php echo $value['price'] ?></td>
        <td><?php echo $value['img_url'] ?></td>
        <td><?php echo $value['logo_img_url'] ?></td>
        <td><?php echo $value['brand'] ?></td>
        <td><a href="#">update</a></td>
        <td><a href="#">delete</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
