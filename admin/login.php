<?php
  if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
    header('location: index.php?act=dashboard');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin-login</title>
  <?php include 'inc/links.php' ?>
</head>

<body class="bg-light">
  <div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form method="POST" action='index.php?act=login'>
      <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
      <div class="p-4">
        <div class="mb-3">
          <input name="admin_name" required type="text" class="form-control shadow-none text-center"
            placeholder="Admin Name">
        </div>
        <div class="mb-4">
          <input name="admin_pass" required type="password" class="form-control shadow-none text-center"
            placeholder="Password">
        </div>
        <button name="login" type="submit" class="btn text-white bg-black shadow-none">LOGIN</button>
      </div>
    </form>
  </div>


  <?php include 'inc/scripts.php' ?>


</body>

</html>