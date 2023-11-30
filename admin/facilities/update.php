
<div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="index.php?act=update_facilities" id="add_room_form" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title mt-3 mb-5">Update facilities</h5>
                            
                        </div>
                        <?php
                            // extract($one_room_type);   
                            extract($one_facilities);        
                        ?>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" value="<?=$name?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Icon</label>
                                        <input name="icon" type="file" class="form-control shadow-none" value="<?=$icon?>">
                                        <?php echo '<img src="'.$icon.'" class="w-100">'; ?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control shadow-none" id="" cols="30" rows="5"><?=$description?></textarea>
                                    </div>
                                    
                                    

                                    

                                    
                                    
                                </div>
                            </div>

                            <div class="text-center my-1">
                                <input type="hidden" name="id_facilities" id="idroom" value="<?=$id?>">
                                <button name="update_facilities" type="submit" class="btn btn-dark shadow-none">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>