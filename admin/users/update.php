<?php
if (is_array($user)) {
    extract($user);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Edit</h3>
                <div class="card">
                    <div>
                        <div class="col-12 mb-5 px-4 mt-3">
                            <form action="index.php?act=updateusers" method="POST" enctype="multipart/form-data">
                                <h5 class="mb-3 fw-bold">Basic Information</h5>
                                <div class="row mb-5">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" value="<?= $name ?>" class=" form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Phone number</label>
                                        <input name="phonenum" type="text" value="<?= $phonenum ?>" class=" form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Date of birth</label>
                                        <input name="dob" type="date" value="<?= $dob ?>" class=" form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Address</label>
                                        <input name="address" type="text" value="<?= $address ?>" class=" form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Email</label>
                                        <input name="email" type="text" value="<?= $email ?>" class=" form-control shadow-none" required>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-5 px-4">
                                <div class="bg-white p-3 p-md rounded shadow-sm">
                                    <h5 class="mb-3 fw-bold">Picture</h5>
                                    <img src="<?= $img ?>" class="img-fluid mb-3" alt="" required>
                                    <label class="form-label">New Picture</label>
                                    <input name="profile" type="file" class="mb-4 form-control shadow-none">
                                </div>
                            </div>
                            <div class="col-8 mb-5 px-4">
                                <h5 class="mb-3 fw-bold">Password</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Password</label>
                                        <input name="password" type="text" value="<?= $password ?>" class="form-control shadow-none" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="submit" value="Save Changes" name="capnhat" class="btn custom-bg border-0 m-3 btn-dark shadow-none">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require('inc/scripts.php');
    print_r($profile);
    ?>
    <link rel="stylesheet" href="../../">
</body>

</html>