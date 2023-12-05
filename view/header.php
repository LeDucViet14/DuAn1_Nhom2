<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Leo Hotel</title>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
            <div class="container-fluid">
                <?php
                    foreach($general_settings as $logo){
                        
                    }
                ?>
                <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php?act=home"><?=$logo['name_hotel'] ?></a>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active me-2" aria-current="page" href="index.php?act=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="index.php?act=rooms">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="index.php?act=facilities">Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="index.php?act=contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="index.php?act=about">About us</a>
                        </li>
                    </ul>
                    <form action="" class="d-flex" role="search" method="POST">
                        <?php
                            if(isset($_SESSION['user']) && $_SESSION['user'] == true){
                                extract($_SESSION['user']);
                               // print_r($profile);
                                // print_r($profile);
                                echo '
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-dark shadow-none dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <img class="me-1" width="30px" height="30px"  src="'.$profile.'" alt=""> '.$name.'
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-lg-end">
                                        <li><a href="./index.php?act=profile" class="dropdown-item">Profile</a></li>
                                        <li><a href="" class="dropdown-item">Booking</a></li>
                                        <li><a href="./index.php?act=logout" class="dropdown-item">Logout</a></li>
                                    </ul>
                                </div>
                                ';
                            }else{
                        ?>
                        
                        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3"
                            data-bs-toggle="modal" data-bs-target="#loginModal">
                            Login
                        </button>
                        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                            data-bs-target="#registerModal">
                            Register
                        </button>
                        <?php
                            }
                        ?>
                        
                    </form>
                </div>
            </div>
        </nav>

        <!-- hiển thị form login -->
        <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="./index.php?act=login_user" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fa-regular fa-circle-user"></i> User login</h5>
                            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input name="email_user" type="email" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control shadow-none" required>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <button name="login_user" type="submit" class="btn btn-dark shadow-none">Login</button>
                                    <button type="button" class="btn text-secondary text-decoration-none" data-bs-toggle="modal"data-bs-target="#forgotModal">
                                        Forgot password
                                    </button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- hiển thị form Register-->
        <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="./index.php?act=register" id="register-form" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fa-regular fa-address-card"></i> User Registration</h5>
                            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                Note: Your details must match with your ID that will be required during check-in
                            </span>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Phone number</label>
                                        <input name="phonenum" type="number" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Picture</label>
                                        <input name="profile" type="file"  class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea name="address" class="form-control" rows="1" required></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Pincode</label>
                                        <input name="pincode" type="number" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Date of birth</label>
                                        <input name="dob" type="date" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Password</label>
                                        <input name="pass" type="password" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input name="cpass" type="password" class="form-control shadow-none" required>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center my-1">
                                <button name="register" type="submit" class="btn btn-dark shadow-none">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- hiển thị form forgotpassword -->
        <div class="modal fade" id="forgotModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="./index.php?act=forgotpass" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fa-regular fa-circle-user"></i> Forgot Password</h5>
                        </div>

                        <div class="modal-body">
                                <div class="mb-4">
                                    <label class="form-label">Email address</label>
                                    <input name="email" type="email" class="form-control shadow-none" required>
                                </div>
                                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                                Note: A link will be sent to your email to reset your passoword !
                                </span>
                                <div class="mb-2 text-end">
                                    <button type="button" class="btn text-secondary text-decoration-none" data-bs-toggle="modal"data-bs-target="#loginModal">
                                        CANCEL
                                    </button>
                                    <button name="sendlink" type="submit" class="btn btn-dark shadow-none">SEND LINK</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </header>