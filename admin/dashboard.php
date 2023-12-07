<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Dashboard</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 fw-bold">Bookings</h5>
                        </div>
                        <div style="height: 480px; overflow-y: scroll;">
                            <table class="table">
                                <thead class="bg-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Rooms</th>
                                        <th scope="col">Check in</th>
                                        <th scope="col">Check out</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Adsress</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phonenum</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 1;
                                    foreach ($list_bk as $bk) {
                                        extract($bk);
                                        $xoabk = "index.php?act=deletebk&id=" . $bk['0'];
                                        echo '<tr>';
                                        echo '<td>' . $count++ . '</td>';
                                        echo '<td>' . $name . '</td>';
                                        echo '<td>' . $checkin . '</td>';
                                        echo '<td>' . $checkout . '</td>';
                                        echo '<td>' . $name_user . '</td>';
                                        echo '<td>' . $address . '</td>';
                                        echo '<td>' . $email . '</td>';
                                        echo '<td>' . $phonenum . '</td>';
                                        echo '<td>
                                    <a href="' . $xoabk . '"> <button  class="bg-danger rounded" >Delete</button></a> 
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

</html>