<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5 px-4">
                <h2 class="fw-bold">BOOKINGS</h2>
                <div>
                    <a href="index.php?act=home" class="text-secondary text-decoration-none">HOME</a>
                    <span class="text-secondary"> > </span>
                    <a class="text-secondary text-decoration-none" href="">BOOKINGS</a>
                </div>
            </div>
            <?php
                if($booking_user==true){
                    $style ="";
                    foreach($booking_user as $bk){
                        extract($bk);
                        // print_r($room_id);
                        if($booking_status == 'booked'){
                            $style ="bg-success";
                            // $review = '<button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#review">
                            //             Review
                            //         </button>';
                        }else if($booking_status == 'cancel'){
                            $style ="bg-danger";
                            // $review ="";
                        }else{
                            // $review ="";
                            $style ="bg-warning";
                        }
                        echo '
                        <div class="col-md-4 mb-5 px-4">
                            <div class="bg-white p-3 rounded shadow-sm">
                                <h5 class="fw-bold">'.$name.'</h5>
                                <p>'.$price.' VND per night</p>
                                <p>
                                    <b>Check in: </b>'.$checkin.'<br>
                                    <b>Check out: </b>'.$checkout.'
                                </p>
                                <p>
                                    <b>Amount: </b> '.$amount.'<br>
                                </p>
                                <span class="mb-3 badge '.$style.'">'.$booking_status.'</span><br>
                            </div>
                        </div>
                        ';
                    }
                }else{
                    echo "<div class='col-lg-12 mb-5 px-4'>
                        <h4 class='fw-bold'>You haven't booked any rooms yet !</h4>
                    </div>";
                }
                
            ?>
            
            <!-- hiển thị review -->
            <div class="modal fade" id="review" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fa-regular fa-comment"></i> Review</h5>
                            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">content</label>
                                    <textarea name="content" class="form-control" id="" cols="30" rows="3" required></textarea>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <button name="submit" type="submit" class="btn btn-dark shadow-none">Review</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
            

        </div>
    </div>
</body>
</html>