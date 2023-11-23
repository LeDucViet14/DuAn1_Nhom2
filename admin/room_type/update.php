
<div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="index.php?act=update_room_type" id="add_room_form" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title mt-3 mb-5">Update room</h5>
                            
                        </div>
                        <?php
                            if(is_array($one_room_type)){
                                extract($one_room_type); 
                            }
                            $hinhpath = './'.$img; 
                            // if(is_file($hinhpath)){
                            //     $hinhpath='<img src="'.$hinhpath.'" style="width:100px; height:100px">';
                            // }          
                        ?>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" value="<?=$name?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Price</label>
                                        <input name="price" type="text" class="form-control shadow-none" value="<?=$price?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Children</label>
                                        <input name="children" type="text" class="form-control shadow-none" value="<?=$children?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Adult</label>
                                        <input name="adult" type="text" class="form-control shadow-none" value="<?=$adult?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Image</label>
                                        <!-- <img src="../upload_admin/hinh-nen-que-huong-tuyet-dep_025901137.jpg" alt=""> -->
                                        <input name="img" type="file" class="form-control shadow-none" value="<?=$hinhpath?>">
                                        <?php echo '<img src="'.$hinhpath.'" class="w-100">'; ?>
                                        
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control shadow-none" id="" cols="30" rows="5"><?=$description?></textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" style="color:red;">*Attention*</label><br>
                                        <label class="form-label" style="color:red;">Existing facilities:</label>
                                        <?php
                                            foreach($facilities as $faci){
                                                print_r($faci['name']);
                                                echo ' - ';
                                            }
                                        ?><br>
                                        <label class="form-label" style="color:red;">Existing features:</label>
                                        <?php
                                            foreach($features as $feature){
                                                print_r($feature['name']);
                                                echo ' - ';
                                            }
                                        ?>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Facilities1</label>
                                        <input name="Facilities1" type="text" class="form-control shadow-none" value="<?=$facilities1?>">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Facilities2</label>
                                        <input name="Facilities2" type="text" class="form-control shadow-none" value="<?=$facilities2?>">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Facilities3</label>
                                        <input name="Facilities3" type="text" class="form-control shadow-none" value="<?=$facilities3?>">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Facilities4</label>
                                        <input name="Facilities4" type="text" class="form-control shadow-none" value="<?=$facilities4?>">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Features1</label>
                                        <input name="Features1" type="text" class="form-control shadow-none" value="<?=$features1?>">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Features2</label>
                                        <input name="Features2" type="text" class="form-control shadow-none" value="<?=$features2?>">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Features3</label>
                                        <input name="Features3" type="text" class="form-control shadow-none" value="<?=$features3?>">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Features4</label>
                                        <input name="Features4" type="text" class="form-control shadow-none" value="<?=$features4?>">
                                    </div>
                                    
                                    

                                    

                                    
                                    
                                </div>
                            </div>

                            <div class="text-center my-1">
                                <input type="hidden" name="room_type_id" id="idroom" value="<?=$id?>">
                                <button name="update_room_type" type="submit" class="btn btn-dark shadow-none">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>