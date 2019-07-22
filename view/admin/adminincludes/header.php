<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <?php if ($_GET['url'] == 'admin/products'): ?>
      <script type="text/javascript" src="../js/admin_js/admin_product.js"></script>
    <?php elseif($_GET['url'] == 'admin/users'): ?>
      <script type="text/javascript" src="../js/admin_js/admin_user.js"></script>
    <?php endif; ?>
    <script type="text/javascript" src="../js/admin_js/admin.js"></script>
    <link rel="stylesheet" href="./assets/css/admin.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php require_once('nav.php'); ?>
