<h1>Aside</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Bilo sta za sada</th>
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
        <td><a href="http://localhost/igorjanosevic/workshop/admin/updateProductData?id=<?= $value['id']; ?>">update</a></td>
        <td><a href="http://localhost/igorjanosevic/workshop/admin/deleteProduct?id=<?= $value['id']; ?>">delete</a></td>
      </tr>
    <?php endforeach; ?>
    <tr class="secret">
      <form action="http://localhost/igorjanosevic/workshop/admin/insertNewProduct" method="post" enctype="multipart/form-data">
        <td><input type="text" name="title" placeholder="Enter title"></td>
        <td><input type="text" name="description" placeholder="Enter description"></td>
        <td><input type="text" name="price" placeholder="Enter price"></td>
        <td colspan="3"><input type="file" name="img_url">Upload product image</td>
        <td><input type="file" name="logo_img_url">Upload logo image</td>
        <td><input type="text" name="brand" placeholder="Enter brand"></td>
        <td><input type="submit" name="submit" value="Submit" id="product_submit_btn"></td>
      </form>
    </tr>
  </tbody>
  <td colspan="2"><a href="#" class="addNewProduct">Dodaj novi +</a></td>
</table>
