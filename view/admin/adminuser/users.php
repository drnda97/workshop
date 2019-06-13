<h1>Svi korisnici na nasem sajtu</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">first name</th>
      <th scope="col">last name</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">loged in</th>
      <th scope="col">address</th>
      <th scope="col">postal code</th>
      <th scope="col">profile img url</th>
      <th scope="col" colspan="2">Radnja</th>
    </tr>
  </thead>
  <tbody>
    <form class="" action="index.html" method="post">
      <?php foreach ($_SESSION['admin_users'] as $user): ?>
      <tr>
        <td scope="row"><?php echo $user["id"]; ?></td>
        <td><?php echo $user["first_name"]; ?></td>
        <td><?php echo $user["last_name"]; ?></td>
        <td><?php echo $user["username"]; ?></td>
        <td><?php echo $user["email"]; ?></td>
        <td><?php echo $user["loged_in"]; ?></td>
        <td><?php echo $user["address"]; ?></td>
        <td><?php echo $user["postal_code"]; ?></td>
        <td><?php echo $user["profile_img_url"]; ?></td>
        <td><a href="#">update</a></td>
        <td><a href="#">delete</a></td>
      </tr>
    <?php endforeach; ?>
  </form>
  </tbody>

</table>
