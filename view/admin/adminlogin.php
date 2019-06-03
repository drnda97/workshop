<script type="text/javascript" src="./js/validateForm.js"></script>
<div class="wrapper">
  <form action="http://localhost/igorjanosevic/workshop/admin/checkadmin" method="post" id="adminform">
    <div class="form-control">
      <legend>Email</legend>
      <input type="text" name="email" value="">
      <small class="fail"></small>
    </div>
    <div class="form-control">
      <legend>Username</legend>
      <input type="text" name="username" value="">
      <small class="fail"></small>
    </div>
    <div class="form-control">
      <legend>Password</legend>
      <input type="text" name="password" value="">
      <small class="fail"></small>
    </div>
    <button type="button" name="Submit">Submit</button>
  </form>
</div>
<link rel="stylesheet" href="./assets/css/admin.css">
