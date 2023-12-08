<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard </title>
    <link rel="stylesheet" href="inc/links.php">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Dashboard</h3>

                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5>Bookings Analytics</h5>
                        <select class="form-select shadow-none bg-light w-auto" onchange="booking_analytics(this.value)">
                            <!-- <option value="0" >Past 0s</option> -->
                            <option value="1" >Past 30 Days</option>
                            <option value="2" >Past 90 Days</option>
                            <option value="3">Past 1 Year</option>
                            <option value="4">All time</option>
                        </select>
                    </div>
                    <div class="row mb-4 ">
                        <div class="col-md-3 mb-4">
                            <a href="" class="text-decoration-none">
                                <div class="card text-center text-info p-3">
                                    <h6>Total Bookings</h6>
                                    <h1 class="mt-2 mb-0" id="total_bookings"></h1>
                                    <h4 class="mt-2 mb-0" id="total_atm"> VND</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a href="" class="text-decoration-none">
                                <div class="card text-center text-success p-3">
                                    <h6>Total Booked</h6>
                                    <h1 class="mt-2 mb-0" id="active_bookings"></h1>
                                    <h4 class="mt-2 mb-0" id="active_atm"> VND</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a href="" class="text-decoration-none">
                                <div class="card text-center text-danger p-3">
                                    <h6>Total Bookings cancelled</h6>
                                    <h1 class="mt-2 mb-0" id="cancelled_bookings"></h1>
                                    <h4 class="mt-2 mb-0" id="cancelled_atm"> VND</h4>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5>Statistics on this month's occupancy rate</h5>
                    </div>
                    <?php 
                        foreach($total_rooms as $ttr){
                            extract($ttr);
                        }
                        foreach($total_rooms_booked as $ttrb){
                            extract($ttrb);
                        }
                        $avg = ($total_room_booked / $total_room) * 100;
                    ?>
                    <div class="row mb-4 ">
                        <div class="col-md-3 mb-4">
                            <a href="" class="text-decoration-none">
                                <div class="card text-center text-info p-3">
                                    <h6>Total Rooms</h6>
                                    <h1 class="mt-2 mb-0"><?=$total_room?></h1>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a href="" class="text-decoration-none">
                                <div class="card text-center text-success p-3">
                                    <h6>Total Room Booked</h6>
                                    <h1 class="mt-2 mb-0"><?=$total_room_booked?></h1>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a href="" class="text-decoration-none">
                                <div class="card text-center text-danger p-3">
                                    <h6>Room occupancy rate</h6>
                                    <h2 class="mt-2 mb-0">
                                        <?php
                                        echo '('.$total_room_booked.'/'.$total_room.')*100='.$avg.'%';
                                        ?>
                                    </h2>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>



                

            </div>
        </div>
    </div>
    <script>
        function booking_analytics(period=1){
            let xhr = new XMLHttpRequest();
            xhr.open("POST","../ajax/dashboard.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
                let data = JSON.parse(this.responseText);
                document.getElementById('total_bookings').textContent = data['0']['total_bookings'];
                document.getElementById('total_atm').textContent = data['0']['total_atm']+' VND';
                document.getElementById('active_bookings').textContent = data['0']['active_bookings'];
                document.getElementById('active_atm').textContent = data['0']['active_atm']+' VND';
                document.getElementById('cancelled_bookings').textContent = data['0']['cancelled_bookings'];
                document.getElementById('cancelled_atm').textContent = data['0']['cancelled_atm']+' VND';
                // console.log(data['0']['total_bookings']);
                // console.log(data);
                
            }

            xhr.send('booking_analytics&period='+period);
        }

        window.onload = function(){
            booking_analytics();
        }
    </script>

   
</body>
</html> 