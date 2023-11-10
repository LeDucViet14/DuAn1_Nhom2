<main>
        <div class="my-5 px-4">
            <h2 class="text-center fw-bold h-font">CONTACT US</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, <br> chat luong
                Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong Uy tin, chat luong
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <?php
                        foreach($contact_home as $contact){
                            extract($contact);
                            echo '
                            <div class="bg-white rounded shadow p-4">
                                <iframe class="w-100 mb-4"
                                    src="'.$iframe.'"
                                    height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
        
                                <h5>Addrees</h5>
                                <a href="'.$gmap.'" target="_blank"
                                    class="d-inline-block text-decoration-none text-dark mb-3">
                                    <i class="fa-solid fa-location-dot"></i> '.$address.'
                                </a><br>
        
                                <h5>Call us</h5>
                                <a href="tel: '.$pn1.'" class="d-inline-block mb-2 text-decoration-none text-dark"> <i
                                        class="fa-solid fa-phone-volume"></i> '.$pn1.'
                                </a><br>
                                <a href="tel: '.$pn2.'" class="d-inline-block mb-2 text-decoration-none text-dark"> <i
                                        class="fa-solid fa-phone-volume"></i> '.$pn2.'
                                </a>
        
                                <h5 class="mt-2">Email</h5>
                                <a href="mailto: '.$pn1.'"
                                    class="d-inline-block mb-2 text-decoration-none text-dark">
                                    <i class="fa-solid fa-envelope"></i> '.$email.'
                                </a>
                                
                                <h5 class="mt-2">Follow us</h5>
                                <a href="'.$tw.'" class="d-inline-block text-dark fs-5 me-2">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="'.$fb.'" class="d-inline-block text-dark fs-5 me-2">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="'.$insta.'" class="d-inline-block text-dark fs-5 me-2">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
        
    
                            </div>
                            ';
                        }
                    ?>
                    
                </div>


                <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4">
                        <form action="">
                            <h5>Send a message</h5>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight: 500;">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight: 500;">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight: 500;">Subject</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight: 500;">Message</label>
                                <textarea class="form-control" rows="5" style="resize:none ;"></textarea>
                            </div>
                            <button type="submit" class="btn text-white custom-bg">SEND</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    </main>