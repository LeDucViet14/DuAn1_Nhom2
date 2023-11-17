<div class="container">
    <div class="row">

        <div class="col-12 my-5 px-4">
            <h2 class="fw-bold">PROFILE</h2>
            <div>
                <a href="index.php?act=home" class="text-secondary text-decoration-none">HOME</a>
                <span class="text-secondary"> > </span>
                <a class="text-secondary text-decoration-none" href="">PROFILE</a>
            </div>
        </div>
        <?php 
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
            }
        ?>
        <div class="col-12 mb-5 px-4">
            <div class="bg-white p-3 p-md rounded shadow-sm">
                <form action="index.php?act=profile" method="POST" enctype="multipart/form-data">
                    <h5 class="mb-3 fw-bold">Basic Information</h5>
                    <div class="row mb-5">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Name</label>
                            <input name="name" value="<?=$name?>"  type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Phone number</label>
                            <input name="phone" value="<?=$phonenum?>" type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Date of birth</label>
                            <input name="dob" value="<?=$dob?>" type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Pincode</label>
                            <input name="pincode" value="<?=$pincode?>" type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Address</label>
                            <input name="address" value="<?=$address?>" type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Email</label>
                            <input name="email" value="<?=$email?>" type="text" class="form-control shadow-none">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mb-5 px-4">
                            <div class="bg-white p-3 p-md rounded shadow-sm">
                                <h5 class="mb-3 fw-bold">Picture</h5>
                                <img src="<?=$img?>" class="img-fluid mb-3" alt="">
                                <label class="form-label">New Picture</label>
                                <input name="profile" type="file" class="mb-4 form-control shadow-none">
                            </div> 
                        </div>

                        <div class="col-8 mb-5 px-4">
                            <h5 class="mb-3 fw-bold">Password changes</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Password old</label>
                                    <input name="pass_old" type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Password new</label>
                                    <input name="pass_new" type="password" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="" value="<?=$id?>"> 
                    <button name="update_info" type="submit" class="btn custom-bg border-0 btn-dark shadow-none">Save Changes</button>
                </form>
            </div>
        </div>

        

        

    </div>
</div>