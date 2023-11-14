<?php
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel - Dashboard</title>
    <?php include 'inc/links.php' ?>
</head>
<body class='bg-light'>
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
        <h3 class='mb-0'>ADMIN PANEL</h3>
        <a href="index.php?act=logout" class='btn btn-light btn-sm'>LOG OUT</a>
    </div>
    




    <?php include 'inc/scripts.php' ?>
</body>
</html>