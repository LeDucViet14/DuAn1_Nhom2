



    <main>
    <div class="my-5 px-4">
        <h2 class="text-center fw-bold h-font">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4>FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                            <!-- check availablity -->
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3 d-flex align-item-center justify-content-between" style="font-size:18px ;">
                                    <span>CHECK AVAILABILITY</span>
                                </h5>
                                <form action="index.php?act=search" method="post">
                                    <label class="form-label">Check in</label>
                                    <input type="date" class="form-control shadow-none mb-3" name="start_date" required>
                                    <label class="form-label">Check out</label>
                                    <input type="date" class="form-control shadow-none" name="end_date" required>
                                    <button type="submit" class="btn btn-sm w-100 text-white custom-bg shadow-none mt-3">Search</button>
                                </form>

                            </div>
                            <!-- <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size:18px ;">FACILITIES</h5>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1"> facility 1</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f2"> facility 2</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
<label class="form-check-label" for="f3"> facility 3</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f4" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f4"> facility 4</label>
                                    </div>
                                </div> -->
                            <!-- <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px ;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <label class="form-label"> Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label"> Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>

                            </div> -->

                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4" id="rooms-data">
                <?php
                foreach ($all_room as $room) {
                    // print_r($rt);
                    extract($room);
                    $link_book = "index.php?act=confirm_booking&id=$id";
                    $link = "index.php?act=room_details&id=$id";
                    $hinhpath = './admin' . $img;
                    echo '
                            <div class="card mb-4 shadow border-0" >
                            <div class="row g-0 p-3 align-items-center">
                                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                    <img src="' . $hinhpath . '" class="img-fluid rounded" alt="room">
                                </div>
                                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                    <h5 class="mb-3">' . $name . '</h5>
                                    <div class="features mb-3">
                                        <h6 class="mb-1">Features</h6>
                                        <span class="badge text-dark text-wrap">' . $features1 . '</span>
                                        <span class="badge text-dark text-wrap">' . $features2 . '</span>
                                        <span class="badge text-dark text-wrap">' . $features3 . '</span>
                                        <span class="badge text-dark text-wrap">' . $features4 . '</span>
                                    </div>
<div class="facilities mb-3">
                                        <h6 class="mb-1">Facilities</h6>
                                        <span class="badge  text-dark ">' . $facilities1 . '</span>
                                        <span class="badge  text-dark ">' . $facilities2 . '</span>
                                        <span class="badge  text-dark ">' . $facilities3 . '</span>
                                        <span class="badge  text-dark ">' . $facilities4 . '</span>
                                        
                                        
                                    </div>
                                    <div class="guests">
                                        <h6 class="mb-1">Guests</h6>
                                        <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                            ' . $children . ' Children
                                        </span>
                                        <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                            ' . $adult . ' Adults
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                                    <h6 class="mb-4">' . $price . ' per night</h6>
                                    <a href="' . $link_book . '" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
                                    <a href="' . $link . '" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                                </div>
                            </div>
                        </div>
                            ';
                }
                ?>
                <?php
                // Xử lý dữ liệu đầu vào
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $start_date = $_POST["start_date"];
                    $end_date = $_POST["end_date"];

                    // Kết nối đến cơ sở dữ liệu
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "duan1";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Kiểm tra kết nối
                    if ($conn->connect_error) {
                        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
                    }

                    // Hàm để lọc các phòng khả dụng dựa trên các tiêu chí
                    function filterRooms($conn, $start_date, $end_date)
                    {
                        $filteredRooms = [];

                        $sql = "SELECT rooms.id, rooms.name
            FROM rooms
LEFT JOIN bookings ON rooms.id = bookings.room_id
            WHERE (bookings.room_id IS NULL)
               OR (bookings.room_id IS NOT NULL AND bookings.checkin NOT BETWEEN '$start_date' AND '$end_date'
                   AND bookings.checkout NOT BETWEEN '$start_date' AND '$end_date')";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $filteredRooms[] = ['id' => $row['id'], 'name' => $row['name']];
                            }
                        }

                        return $filteredRooms;
                    }

                    // Lọc các phòng khả dụng
                    $availableRooms = filterRooms($conn, $start_date, $end_date);

                    // Hiển thị danh sách phòng
                    foreach ($all_room as $room) {
                        extract($room);
                        $link_book = "index.php?act=confirm_booking&id=$id";
                        $link = "index.php?act=room_details&id=$id";
                        $hinhpath = './admin' . $img;

                        // Check if the room is available for the specified dates
                        $isAvailable = false;
                        foreach ($availableRooms as $availableRoom) {
                            if ($availableRoom['id'] == $id) {
                                $isAvailable = true;
                                break;
                            }
                        }

                        // Display the room only if it is available
                        if ($isAvailable) {
                            echo '
                <div class="card mb-4 shadow border-0">
                    <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                    <img src="' . $hinhpath . '" class="img-fluid rounded" alt="room">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h5 class="mb-3">' . $name . '</h5>
                    <div class="features mb-3">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge text-dark text-wrap">' . $features1 . '</span>
                        <span class="badge text-dark text-wrap">' . $features2 . '</span>
                        <span class="badge text-dark text-wrap">' . $features3 . '</span>
                        <span class="badge text-dark text-wrap">' . $features4 . '</span>
                    </div>
                    <div class="facilities mb-3">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge  text-dark ">' . $facilities1 . '</span>
                        <span class="badge  text-dark ">' . $facilities2 . '</span>
                        <span class="badge  text-dark ">' . $facilities3 . '</span>
<span class="badge  text-dark ">' . $facilities4 . '</span>
                        
                        
                    </div>
                    <div class="guests">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                            ' . $children . ' Children
                        </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                            ' . $adult . ' Adults
                        </span>
                    </div>
                </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4">' . $price . ' per night</h6>
                            <a href="' . $link_book . '" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
                            <a href="' . $link . '" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            ';
                        }
                    }

                    // Đóng kết nối
                    $conn->close();
                }
                ?>
                <!-- <div class="card mb-4 shadow border-0" >
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="room">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">Name room</h5>
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill text-bg-light text-dark text-wrap">kitchen</span>
                                </div>
                                <div class="facilities mb-3">
                                    <h6 class="mb-1">Facilities</h6>
                                    <span class="badge rounded-pill text-bg-light text-dark text-wrap">wifi</span>
                                    
                                    
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                        3 Children
                                    </span>
                                    <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                        2 Adults
                                    </span>
                                </div>
</div>
                            <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                                <h6 class="mb-4">120.000 per night</h6>
                                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
                                <a href="index.php?act=room_details" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div> -->



            </div>
        </div>
    </div>