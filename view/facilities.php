<main>
        <div class="my-5 px-4">
            <h2 class="text-center fw-bold h-font">OUR FACILITIES</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, <br> chat luong
                Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong
            </p>
        </div>
        <div class="container">
            <div class="row">
                <?php
                    foreach($facilities as $fac){
                        extract($fac);
                        $hinhpath = './admin'.$icon;
                        echo '
                        <div class="col-lg-4 col-md-6 mb-5 px-4">
                            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="'.$hinhpath.'" alt="" width="40px">
                                    <h5 class="m-0 ms-2">'.$name.'</h5>
                                </div>
                                <p>'.$description.' </p>
                            </div>
                        </div>
                        ';
                    }
                ?>

                
                <!-- <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="images/facilities/IMG_43553.svg" alt="" width="40px">
                            <h5 class="m-0 ms-2">Wifi</h5>
                        </div>
                        <p>Wifi toc do nhanh Wifi toc do nhanh Wifi toc do nhanh Wifi toc 
                            Wifi toc do nhanh Wifi toc do nhanh Wifi toc do nhanh 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="images/facilities/IMG_43553.svg" alt="" width="40px">
                            <h5 class="m-0 ms-2">Wifi</h5>
                        </div>
                        <p>Wifi toc do nhanh Wifi toc do nhanh Wifi toc do nhanh Wifi toc 
                            Wifi toc do nhanh Wifi toc do nhanh Wifi toc do nhanh 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="images/facilities/IMG_43553.svg" alt="" width="40px">
                            <h5 class="m-0 ms-2">Wifi</h5>
                        </div>
                        <p>Wifi toc do nhanh Wifi toc do nhanh Wifi toc do nhanh Wifi toc 
                            Wifi toc do nhanh Wifi toc do nhanh Wifi toc do nhanh 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="images/facilities/IMG_43553.svg" alt="" width="40px">
                            <h5 class="m-0 ms-2">Wifi</h5>
                        </div>
                        <p>Wifi toc do nhanh Wifi toc do nhanh Wifi toc do nhanh Wifi toc 
                            Wifi toc do nhanh Wifi toc do nhanh Wifi toc do nhanh 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="images/facilities/IMG_43553.svg" alt="" width="40px">
                            <h5 class="m-0 ms-2">Wifi</h5>
                        </div>
                        <p>Wifi toc do nhanh Wifi toc do nhanh Wifi toc do nhanh Wifi toc 
                            Wifi toc do nhanh Wifi toc do nhanh Wifi toc do nhanh 
                        </p>
                    </div>
                </div> -->
            </div>
        </div>


    </main>