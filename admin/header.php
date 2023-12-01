<div class="container-fluid bg-dark text-light p-3 d-flex sticky-top algin-items-center justify-content-between">
     <h3 class="mb-0 h-font">LEO HOTEL</h3>
     <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
 </div>
 <div class="container-fluid">
     <div class="row">
         <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
             <nav class="navbar navbar-expand-lg navbar-dark">
                 <div class="container-fluid flex-lg-column align-items-stretch">
                     <h4 class="mt-2 text-light">ADMIN PANEL</h4>
                     <button class="navbar-toggler shadow-none" type="button" data-toggle="collapse" data-target="#adminDropdown" aria-controls="adminDropdown" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                         <ul class="nav nav-pills flex-column">
                             <li class="nav-item">
                                 <a class="nav-link text-white" href="#">Dashboard</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link text-white" href="index.php?act=room_type">Rooms Type</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link text-white" href="index.php?act=users">Users</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link text-white" href="index.php?act=rooms">Rooms</a>
                             </li>
                             <?php
                                if(isset($_SESSION['admin'])){
                                    if($_SESSION['admin']['role']!=0){
                                        echo '
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="index.php?act=admin">Admin</a>
                                        </li>
                                        ';
                                    }
                                    
                                }
                             ?>
                             
                             <li class="nav-item">
                                 <a class="nav-link text-white" href="index.php?act=facilities">Facilities</a>
                             </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="index.php?act=cmt">Comments</a>
                            </li>
                             <li class="nav-item">
                                 <a class="nav-link text-white" href="index.php?act=settings">Settings</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </nav>
         </div>
     </div>
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
