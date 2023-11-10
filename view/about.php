<main>
        <div class="my-5 px-4">
            <h2 class="text-center fw-bold h-font">OUR ABOUT</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, <br> chat luong
                Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong
            </p>
        </div>

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                    <h3 class="mb-3">Lorem ispum dolor sit</h3>
                    <p>
                        Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong
                        Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                    <img src="images/about/about.jpg" class="w-100" alt="about">
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/hotel.svg" alt="hotel" width="70px">
                        <h4 class="mt-3">100+ ROOMS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/customers.svg" alt="hotel" width="70px">
                        <h4 class="mt-3">250+ CUSTOMERS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/rating.svg" alt="hotel" width="70px">
                        <h4 class="mt-3">150+ REVIEWS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/about/staff.svg" alt="hotel" width="70px">
                        <h4 class="mt-3">200+ STAFFS</h4>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

        <div class="container px-4">
            <div class="swiper management">
                <div class="swiper-wrapper mb-5">
                    
                    <?php
                        foreach ($about as $item){
                            extract($item);
                            $hinh = $img_path.$picture;
                            echo '
                            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                                <img src="'.$hinh.'" alt="" class="w-100">
                                <h5 class="mt-2">'.$name.'</h5>
                            </div>
                            ';
                        }
                    ?>
                    <!-- <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/IMG_17352.jpg" alt="" class="w-100">
                        <h5 class="mt-2">RANDOM NAME</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/IMG_17352.jpg" alt="" class="w-100">
                        <h5 class="mt-2">RANDOM NAME</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/IMG_17352.jpg" alt="" class="w-100">
                        <h5 class="mt-2">RANDOM NAME</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/IMG_17352.jpg" alt="" class="w-100">
                        <h5 class="mt-2">RANDOM NAME</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/IMG_17352.jpg" alt="" class="w-100">
                        <h5 class="mt-2">RANDOM NAME</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/IMG_17352.jpg" alt="" class="w-100">
                        <h5 class="mt-2">RANDOM NAME</h5>
                    </div> -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </main>