<main>
        <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
            }
            extract($one_room);
            // print_r($one_room);
            $_SESSION['room'] = [
                "id" => $one_room['id'],
                "name" => $one_room['name'],
                "price" => $one_room['price'],
                "payment" => null,
                "available" => false,
            ];
            // print_r($_SESSION['room']);
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
                        <form action="" id="booking_form" method="POST">
                            <div class="card-body">
                                <h5>BOOKING DETAILS</h5>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" disabled type="text" class="form-control shadow-none" value="<?=$_SESSION['user']['name']?>" required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input name="phonenum" disabled type="text" class="form-control shadow-none" value="<?=$phonenum?>" required>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea name="" id="" disabled cols="30" rows="2" class="form-control shadow-none"><?=$address?></textarea>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Check in</label>
                                        <input name="checkin" onchange="check_availability()" type="date" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Check out</label>
                                        <input name="checkout" onchange="check_availability()" type="date" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="spinner-border text-info mb-3 d-none" role="status" id="info_loader">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <h6 class="mb-3 text-danger" id="pay_info">Provide check-in & check-out date !</h6>
                                        <button type="submit" name="pay_now" class="btn btn-sm text-white custom-bg shadow-none w-100 mb-1" disabled>Pay now</button>

                                    </div>
                                </div>
                                

                                

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    </main>
    <script>
        let booking_form = document.getElementById('booking_form');
        let info_loader = document.getElementById('info_loader');
        let pay_info = document.getElementById('pay_info');

        function check_availability(){
            let checkin_val = booking_form.elements['checkin'].value;
            let checkout_val = booking_form.elements['checkout'].value;

            booking_form.elements['pay_now'].setAttribute('disabled',true);

            if(checkin_val!='' && checkout_val!=''){
                pay_info.classList.add('d-none');
                pay_info.classList.replace('text-dark', 'text-danger');
                info_loader.classList.remove('d-none');


                let data = new FormData();

                data.append('check_availability','');
                data.append('check_in',checkin_val);
                data.append('check_out',checkout_val);

                let xhr = new XMLHttpRequest();
                xhr.open("POST","ajax/confirm_booking.php",true);

                xhr.onload = function(){
                    let data = JSON.parse(this.responseText);

                    if(data.status == "check_in_out_equal"){
                        pay_info.innerText = "You cannot check-out on the same day !";
                    }else if(data.status == "check_out_earlier"){
                        pay_info.innerText = "Check-out date is earlier than check-in date !";
                    }else if(data.status == "check_in_earlier"){
                        pay_info.innerText = "Check-in date is earlier than today's date !";
                    }else if(data.status == "unavailable"){
                        pay_info.innerText = "Room not available for this check-in date !";
                    }else{
                        pay_info.innerHTML = "No. of Days: "+data.days+"<br>Total Amount to Pay: "+data.payment+ " VND";
                        pay_info.classList.replace('text-danger', 'text-dark');
                        booking_form.elements['pay_now'].removeAttribute('disabled');
                    }
                    pay_info.classList.remove('d-none');
                    info_loader.classList.add('d-none');    


                }

                xhr.send(data);
                
            }
        }
    </script>