<main>
    <!-- slide -->
    <div class="container-fuild">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_15372.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_40905.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_55677.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_62045.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_93127.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/IMG_99736.png" class="w-100 d-block" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- check availability form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Room -->
    <div class="our-room">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
        <div class="container">
            <div class="row">
                <?php
                    foreach($three_rooms as $room){
                        // echo "<pre>";
                        extract($room);
                        $link = "index.php?act=room_details&id=$id";
                        $link_book = "index.php?act=confirm_booking&id=$id";
                        $hinhpath = './admin'.$img;
                        // print_r($hinhpath);

                        echo '
                        <div class="col-lg-4 col-md-6 my-3">
                        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                            <img src="'.$hinhpath.'" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>'.$name.'</h5>
                                <h6 class="mb-4">'.$price.' VND per night</h6>
                                <div class="features mb-4">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge text-dark ">
                                        '.$facilities1.'
                                    </span>
                                    <span class="badge text-dark">
                                        '.$facilities2.'
                                    </span>
                                    <span class="badge text-dark">
                                        '.$facilities3.'
                                    </span>
                                    <span class="badge text-dark">
                                        '.$facilities4.'
                                    </span>
                                </div>
                                <div class="facilities mb-4">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge text-dark">
                                        '.$features1.'
                                    </span>
                                    <span class="badge text-dark">
                                        '.$features2.'
                                    </span>
                                    <span class="badge text-dark">
                                        '.$features3.'
                                    </span>
                                    <span class="badge text-dark">
                                        '.$features4.'
                                    </span>
                                </div>
                                <div class="rating mb-4">
                                    <h6 class="mb-1">Rating</h6>
                                    <span class="badge rounded-pill bg-light">
                                        <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                        <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                        <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                        <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                    </span>
                                </div>
                                <div class="d-flex justify-content-evenly mb-1">
                                    <a href="'.$link_book.'" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                                    <a href="'.$link.'" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        ';
                    }   
                ?>
                

                <!-- <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Simple room name</h5>
                            <h6 class="mb-4">$50 per night</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    2 rooms
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    1 Batroom
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    2 Balcony
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    2 sofa
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    Room heater
                                </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded-pill bg-light">
                                    <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-1">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Simple room name</h5>
                            <h6 class="mb-4">$50 per night</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    2 rooms
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    1 Batroom
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    2 Balcony
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    2 sofa
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                    Room heater
                                </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded-pill bg-light">
                                    <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                    <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-1">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-12 text-center mt-5">
                    <a href="index.php?act=rooms" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Our facilities -->
    <div class="our-facilities">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
        
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <?php
                    foreach($facilities as $fac){
                        extract($fac);
                        $hinhpath = './admin'.$icon;
                        echo '
                        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                            <img src="'.$hinhpath.'" style="width: 80px;" alt="">
                            <h5 class="mt-3">'.$name.'</h5>
                        </div>
                        ';
                    }
                ?>

                <!-- <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/IMG_41622.svg" style="width: 80px;" alt="">
                    <h5 class="mt-3">Tivi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/IMG_47816.svg" style="width: 80px;" alt="">
                    <h5 class="mt-3">pool</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/IMG_49949.svg" style="width: 80px;" alt="">
                    <h5 class="mt-3">conditioner</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/IMG_96423.svg" style="width: 80px;" alt="">
                    <h5 class="mt-3">Car</h5>
                </div> -->
                <div class="col-lg-12 text-center mt-5">
                    <a href="index.php?act=facilities" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities
                        >>></a>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonials -->
    <div class="testimonials">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
       
        <div class="container">
            <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper mb-5" style="padding-top: 10px;">
                
                <?php
                    foreach($all_comments as $cm){
                        extract($cm);
                        $hinhpath = './admin'.$img;
                        echo '
                        <div class="swiper-slide bg-white p-4 shadow">
                            <div class="profile d-flex align-items-center p-4">
                                <img src="'.$hinhpath.'" alt="" style="width:30%; border-radius:5% ;">
                                
                                <h6 class="m-0 ms-2">'.$name.'</h6>
                            </div>
                            <p>'.$content.'</p>
                            <div class="raiting">
                                <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                            </div>
                        </div>
                        ';
                    }
                ?>
                    

                    <!-- <div class="swiper-slide bg-white p-4 shadow">
                        <div class="profile d-flex align-items-center p-4">
                            <i class="fa-solid fa-star" style="font-size: 25px;"></i>
                            <h6 class="m-0 ms-2">Random user 1</h6>
                        </div>
                        <p>Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le
                            Duc
                            Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet </p>
                        <div class="raiting">
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                        </div>
                    </div>

                    <div class="swiper-slide bg-white p-4 shadow">
                        <div class="profile d-flex align-items-center p-4">
                            <i class="fa-solid fa-star" style="font-size: 25px;"></i>
                            <h6 class="m-0 ms-2">Random user 1</h6>
                        </div>
                        <p>Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le
                            Duc
                            Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet </p>
                        <div class="raiting">
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                        </div>
                    </div>

                    <div class="swiper-slide bg-white p-4 shadow">
                        <div class="profile d-flex align-items-center p-4">
                            <i class="fa-solid fa-star" style="font-size: 25px;"></i>
                            <h6 class="m-0 ms-2">Random user 1</h6>
                        </div>
                        <p>Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet Le
                            Duc
                            Viet Le Duc Viet Le Duc Viet Le Duc Viet Le Duc Viet </p>
                        <div class="raiting">
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                            <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                        </div>
                    </div> -->


                </div>
                <div class="swiper-pagination"></div>

            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> Know More >>></a>
            </div>
        </div>
    </div>

    <!-- Reach us -->
    <div class="reach-us">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

        <div class="container">
            <div class="row">
                <?php
                    foreach($contact_home as $contact){
                        extract($contact);
                        echo '
                        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                            <iframe class="w-100" src="'.$iframe.'" height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="bg-white p-4 rounded mb-3">
                                <h5>Call us</h5>
                                <a href="tel: '.$pn1.'" class="d-inline-block mb-2 text-decoration-none text-dark"> <i
                                        class="fa-solid fa-phone-volume"></i> '.$pn1.'</a>
                                <br>
                                <a href="tel: '.$pn2.'" class="d-inline-block mb-2 text-decoration-none text-dark"> <i
                                        class="fa-solid fa-phone-volume"></i> '.$pn2.'</a>
                            </div>
                            <div class="bg-white p-4 rounded mb-3">
                                <h5>Follow us</h5>
                                <a href="'.$tw.'" class="d-inline-block mb-3">
                                    <span class="badge text-dark fs-6 p-2"><i class="fa-brands fa-twitter"></i>
                                        Twitter</span>
                                </a><br>
                                <a href="'.$fb.'" class="d-inline-block mb-3">
                                    <span class="badge text-dark fs-6 p-2"><i class="fa-brands fa-facebook"></i>
                                        Facebook</span>
                                </a><br>
                                <a href="'.$insta.'" class="d-inline-block">
                                    <span class="badge text-dark fs-6 p-2"><i class="fa-brands fa-instagram"></i>
                                        Instagram</span>
                                </a>
                            </div>
                        </div>
                        ';
                    }
                ?>
                

            </div>
        </div>
    </div>  
</main>