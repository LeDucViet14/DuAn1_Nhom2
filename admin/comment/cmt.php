<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Comments</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Comments</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 fw-bold">Comments</h5>
                        </div>
                        <div style="height: 480px; overflow-y: scroll;">
                            <table class="table">
                                <thead class="bg-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Id users</th>
                                        <th scope="col">User name</th>
                                        <th scope="col">ID rooms</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($list_cmt as $cmt) {
                                        extract($cmt);
                                        $xoacmt = "index.php?act=deletecmt&id=" . $cmt['0'];
                                        echo '<tr>';
                                        echo '<td>' . $cmt['0'] . '</td>';
                                        echo '<td>' . $content . '</td>';
                                        echo '<td>' . $id_user . '</td>';
                                        echo '<td>' . $name . '</td>';
                                        echo '<td>' . $id_room . '</td>';
                                        echo '<td>' . $date . '</td>';
                                        echo '<td>
                                    <a href="' . $xoacmt . '"> <button  class="bg-danger rounded" >Delete</button></a> 
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