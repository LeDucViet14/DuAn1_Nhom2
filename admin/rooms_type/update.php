
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="index.php?act=update_room_type" id="add_room_form" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title mt-3 mb-5">Update room</h5>
                            
                        </div>
                        <?php
                            extract($one_room_type);             
                        ?>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" value="<?=$name?>" required>
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