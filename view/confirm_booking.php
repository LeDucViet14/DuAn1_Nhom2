<main>
        <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
            }
            extract($one_room);
            $hinhpath = './admin/'.$img;
        ?>
        <div class="container">
            <div class="col-lg-12 mb-4 my-5 px-4">
                <h2 class="fw-bold">CONFIRM BOOKING</h2>
                <div style="font-size: 14px;">
                    <a href="index.php?act=home" class="text-secondary text-decoration-none">HOME</a>
                    <span> > </span>
                    <a href="index.php?act=rooms" class="text-secondary text-decoration-none">ROOMS</a>
                    <span> > </span>
                    <a href="" class="text-secondary text-decoration-none">CONFIRM</a>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-7 col-md-12 px-4 ">
                    <div class="card p-3 shadow-sm rounded">
                        <img src="<?=$hinhpath?>" class="img-fluid rounded mb-3" alt="...">
                        <h5><?=$name?></h5>
                        <h6><?=$price?> per night</h6>
                    </div>
                </div>
                
                <div class="col-lg-5 col-md-12 px-4">
                    <div class="card mb-4 border-0 shadow-sm rounded-3">
                        <form action="index.php?act=pay_now" method="POST">
                            <div class="card-body">
                                <h5>BOOKING DETAILS</h5>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" value="<?=$_SESSION['user']['name']?>" required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input name="phonenum" type="text" class="form-control shadow-none" value="<?=$phonenum?>" required>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea name="" id="" cols="30" rows="2" class="form-control shadow-none"><?=$address?></textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Check in</label>
                                        <input name="checkin" min="<?php echo date('d-m-Y'); ?>" type="date" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Check out</label>
                                        <input name="checkout" type="date" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                

                                
                                <button type="submit" name="paynow" class="btn btn-sm text-white custom-bg shadow-none w-100 mb-1">Pay now</button>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    </main>