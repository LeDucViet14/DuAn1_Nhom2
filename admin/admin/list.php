<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Admins </title>
    <link rel="stylesheet" href="inc/links.php">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">ADMINS</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
        
                        <div class="text-end mb-4">
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-admin">
                                <i class="fa-solid fa-plus"></i> Add
                            </button>
                        </div>

                        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                        <table class="table table-hover border">
                            <thead>
                                <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            
                            <?php
                                foreach($listAdmin as $admin){
                                    extract($admin);
                                    $name_role="";
                                    if($role!=0){
                                        $name_role="Vip admin";
                                    }else{
                                        $name_role="Low admin";
                                    }
                                    echo '
                                    <tbody>
                                        <tr class="align-middle">
                                            <td>'.$sr_no.'</td>
                                            <td>'.$admin_name.'</td>
                                            <td>'.$admin_pass.'</td>
                                            <td>'.$name_role.'</td>
                                            <td>
                                                <a href="?act=edit_admin&id='.$sr_no.'">
                                                    <button type="button" class="btn btn-primary shadow-none btn-sm" data-bs-toggle="modal" >
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                                <a href="?act=delete_admin&id='.$sr_no.'">
                                                    <button type="button" class="btn btn-primary shadow-none btn-sm" data-bs-toggle="modal" >
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                    ';
                                }
                            ?>
                        
                        </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- add room modal -->
    <div class="modal fade" id="add-admin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="index.php?act=add_admin" id="" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Admin</h5>
                            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" required>
                                    </div>   
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Password</label>
                                        <input name="password" type="password" class="form-control shadow-none" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Role</label>
                                        <select name="role" id="" class="form-control shadow-none">
                                            <option value="0">Low admin</option>
                                            <option value="1">Vip admin</option>
                                        </select>
                                    </div>   
                                    

                                    
                                    
                                </div>
                            </div>

                            <div class="text-center my-1">
                                <button name="add_admin" type="submit" class="btn btn-dark shadow-none">Add Facilities</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>

   
</body>
</html> 