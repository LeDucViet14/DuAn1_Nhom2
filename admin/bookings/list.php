<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Bookings </title>
    <link rel="stylesheet" href="inc/links.php">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Bookings</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                        <form action="" method="POST">                        
                            <table class="table table-hover border">
                                <thead>
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Room id</th>
                                        <th scope="col">Check In</th>
                                        <th scope="col">Check Out</th>
                                        <th scope="col">Name User</th>
                                        <th scope="col">Phone Num</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                
                                <?php
                                    $a = "";
                                    foreach($bookings as $bk){
                                        extract($bk);
                                        // echo "<pre>";
                                        // print_r($bk);
                                        if($booking_status == 'booked'){
                                            $a = '<a href="index.php?act=again_booking&id='.$bk[0].'"><i class="fa-solid fa-check" style="color:green; font-size:25px"></i></a>';
                                        }else if($booking_status == 'cancel'){
                                            $a = '<a href="index.php?act=again_booking&id='.$bk[0].'"><i class="fa-solid fa-xmark" style="color:red; font-size:25px"></i></a>'; 
                                        }else{
                                            $a = '<a href="index.php?act=agree_booking&id='.$bk[0].'" style="text-decoration: none;padding:5px;color:white;font-size:15px; border-radius:10px; background-color:rgb(12, 156, 12)" name="agree" type="submit"><i class="fa-solid fa-square-check"></i> Agree</a>
                                            <a href="index.php?act=cancel_booking&id='.$bk[0].'" style="text-decoration: none;padding:5px;color:white; font-size:15px; border-radius:10px; background-color:rgb(156, 12, 67)" name="cancel" type="submit"><i class="fa-solid fa-rectangle-xmark"></i> Cancel</a>';
                                        }
                                        echo '
                                        <tbody>
                                            <tr class="align-middle">
                                                <td>'.$bk[0].'</td>
                                                <td>'.$room_id.'</td>
                                                <td>'.$checkin.'</td>
                                                <td>'.$checkout.'</td>
                                                <td>'.$name.'</td>
                                                <td>'.$phonenum.'</td>
                                                <td>
                                                    '.$a.'
                                                </td>
                                            </tr>
                                        </tbody>
                                        ';
                                    }
                                ?>
                            
                            </table>
                            </div>
                        </form>
                    </div>
                    
                    
                </div>

            </div>
        </div>
    </div>
    <!-- add room modal -->
    <div class="modal fade" id="add-facilities" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="index.php?act=add_facilities" id="" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title">Add facilities</h5>
                            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" required>
                                    </div>   
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Icon</label>
                                        <input name="icon" type="file" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control shadow-none" id="" cols="30" rows="5"></textarea>
                                    </div>
                                    

                                    
                                    
                                </div>
                            </div>

                            <div class="text-center my-1">
                                <button name="add_facilities" type="submit" class="btn btn-dark shadow-none">Add Facilities</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>

   
</body>
</html>