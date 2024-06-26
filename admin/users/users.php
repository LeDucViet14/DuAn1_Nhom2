<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Users</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Users</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 fw-bold">Users</h5>
                        </div>
                        <div style="height: 480px; overflow-y: scroll;">
                            <table class="table">
                                <thead class="bg-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Phone number</th>
                                        <th scope="col">Birthday</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 1;  // Biến đếm
                                    foreach ($list_user as $user) {
                                        extract($user);
                                        $xoauser = "index.php?act=deleteusers&id=" . $id;
                                        $suauser = "index.php?act=suausers&id=" . $id;
                                        echo '<tr>';
                                        echo '<td>' . $count++ . '</td>';
                                        echo '<td>' . $name . '</td>';
                                        echo '<td>' . $email . '</td>';
                                        echo '<td>' . $address . '</td>';
                                        echo '<td>' . $phonenum . '</td>';
                                        echo '<td>' . $dob . '</td>';
                                        echo '<td>' . $password . '</td>';
                                        echo '<td>
                                    <a href="' . $xoauser . '"> <button  class="bg-danger rounded" >Delete</button></a> <br>
                                    <a href="' . $suauser . '"> <button  class="bg-primary mt-2 rounded" >Update</button></a> 
                                    </td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('inc/scripts.php'); ?>
</body>
<link rel="stylesheet" href="../../upload/">

</html>