<!-- footer -->
<div class="container-fluid bg-light mt-5">
        <div class="row">
            <?php
                foreach($general_settings as $logo){
                    
                }
            ?>
            <div class="col-lg-4 p-4">
                <h3 class="h-font fw-bold fs-3 mb-2"><?=$logo['name_hotel']?></h3>
                <p>
                    <?=$logo['about_us']?>
                </p>
            </div>

            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="index.php?act=home" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
                <a href="index.php?act=rooms" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
                <a href="index.php?act=facilities" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
                <a href="index.php?act=contact" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
                <a href="index.php?act=about" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a><br>
            </div>

            <?php
                foreach($contact_home as $contact){
                    extract($contact);
                    echo '
                    <div class="col-lg-4 p-4">
                        <h5 class="mb-3">Follow Us</h5>
                        <a href="'.$tw.'" class="d-inline-block mb-2 text-dark text-decoration-none"><i
                                class="fa-brands fa-twitter"></i> Twitter</a><br>
                        <a href="'.$fb.'" class="d-inline-block mb-2 text-dark text-decoration-none"><i
                                class="fa-brands fa-facebook"></i> Facebook</a><br>
                        <a href="'.$insta.'" class="d-inline-block text-dark text-decoration-none"><i class="fa-brands fa-instagram"></i>
                            Instagram</a><br>
    
                    </div>
                    ';
                }
            ?>
            

        </div>
        <h6 class="text-center bg-dark text-white p-3 m-0">Mr. Viet Code website Booking Hotel</h6>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>