
    <main>

        <div class="container">
            <div class="row">
                <?php
                    extract($one_room);
                    $hinhpath = './admin'.$img;
                ?>
                <div class="col-lg-12 mb-4 my-5 px-4">
                    <h2 class="fw-bold"><?=$name?></h2>
                    <div style="font-size: 14px;">
                        <a href="index.php?act=home" class="text-secondary text-decoration-none">HOME</a>
                        <span> > </span>
                        <a href="index.php?act=rooms" class="text-secondary text-decoration-none">ROOMS</a>
                    </div>
                </div>



                <div class="col-lg-7 col-md-12 px-4">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?=$hinhpath?>" class="d-block w-100 rounded" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?=$hinhpath?>" class="d-block w-100 rounded" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?=$hinhpath?>" class="d-block w-100 rounded" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 px-4">
                    <div class="card mb-4 border-0 shadow-sm rounded-3">
                        <div class="card-body">
                            <h4><?=$price?> VND per night</h4>

                            <div class="raiting mb-3">
                                <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                            </div>

                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge text-dark">
                                    <?=$features1?>
                                </span>
                                <span class="badge text-dark">
                                    <?=$features2?>
                                </span>
                                <span class="badge text-dark">
                                    <?=$features3?>
                                </span>
                                <span class="badge text-dark">
                                    <?=$features4?>
                                </span>
                            </div>

                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge text-dark">
                                    <?=$facilities1?>
                                </span>
                                <span class="badge text-dark">
                                    <?=$facilities2?>
                                </span>
                                <span class="badge text-dark">
                                    <?=$facilities3?>
                                </span>
                                <span class="badge text-dark">
                                    <?=$facilities4?>
                                </span>
                            </div>

                            <div class="Guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge text-dark">
                                    <?=$children?> Children
                                </span>
                                <span class="badge text-dark">
                                    <?=$adult?> Adults
                                </span>
                            </div>


                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none w-100 mb-1">Book now</a>

                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4 px-4">
                    <div class="mb-5">
                        <h5>Description</h5>
                        <p><?=$description?></p>
                    </div>
                    <div>
                        <h5 style="margin-bottom:10px ;">Reviews & Ratings</h5>
                    <?php
                        foreach($comments as $cm){
                            extract($cm);
                            $hinhpath = './admin'.$img;
                            
                            echo '
                            
                                <div>
                                    <div class="d-flex align-items-center mb-2">
                                        <img src="'.$hinhpath.'" alt="ảnh" width="40px">
                                        <h6 class="m-0 ms-2 ">'.$name.'</h6>
                                        <p style="font-size:13px ;" class="m-0 ms-2">'.date("d/m/Y", strtotime($date)).'</p>
                                    </div>
                                    <p>'.$content.' </p>
                                    <div class="raiting">
                                        <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                        <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                        <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                        <i class="fa-solid fa-star" style="color: rgb(241, 241, 11);"></i>
                                    </div>
                                </div>
                                <hr>
                            
                            ';
                        }
                    ?>
                    </div>
                    
                </div>

            </div>
        </div>


    </main>
