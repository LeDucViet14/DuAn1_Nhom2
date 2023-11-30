
<div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="index.php?act=update_admin" id="add_room_form" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title mt-3 mb-5">Update facilities</h5>
                            
                        </div>
                        <?php
                            extract($one_admin);       
                        ?>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-md-6 mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" value="<?=$admin_name?>" required>
                                    </div>   
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Password</label>
                                        <input name="password" type="text" class="form-control shadow-none" value="<?=$admin_pass?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Role</label>
                                        <select name="role" id="" class="form-control shadow-none">
                                            <?php
                                                if($role !=0){
                                                    echo '<option value="0">Low admin</option>
                                                        <option value="1" selected>Vip admin</option>';
                                                }else{
                                                    echo '<option value="0" selected>Low admin</option>
                                                        <option value="1" >Vip admin</option>';
                                                }
                                            ?>
                                            

                                        </select>
                                    </div>   
                                   
                                    
                                    

                                    

                                    
                                    
                                </div>
                            </div>

                            <div class="text-center my-1">
                                <input type="hidden" name="id_admin" id="idroom" value="<?=$sr_no?>">
                                <button name="update_admin" type="submit" class="btn btn-dark shadow-none">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>