<?php
    include "model/contact.php";
    include "model/about.php";
    include "model/pdo.php";
    include "model/rooms.php";
    include "global.php";
    include "view/header.php";
    $contact_home = loadContact();
    if(isset($_GET['act']) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                include "view/home.php";
                break;
            case 'about':
                $about = load_about();
                include "view/about.php";
                break;
            case 'contact':
                include "view/contact.php";
                break;
            case 'facilities':
                include "view/facilities.php";
                break;
            case 'rooms':
                $rooms = loadall_room();
                foreach($rooms as $room){
                    $features = loadall_features_room($room['id']);
                    $facilities = loadall_facilities_room($room['id']);
                }
                include "view/rooms.php";
                break;
            case 'room_details':
                include 'view/rooms_details.php';
                break;

            default:
            include "view/home.php";
            break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";
?>