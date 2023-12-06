<?php
    // function check_room($room_id, $checkin, $checkout){
    //     $sql = "SELECT * FROM bookings WHERE room_id = '$room_id' AND
    //     ((checkin >= '$checkin' AND checkin <= '$checkout') OR
    //     (checkout >= '$checkin' AND checkout <= '$checkout'))";
    //     $result = pdo_query($sql);
    //     return $result;
    // }

    function load_one_booking($room_id){
        $sql = "SELECT * FROM `bookings` WHERE room_id = '$room_id' and booking_status = 'booked'";
        $result = pdo_query($sql);
        return $result;
    }

    function load_all_bookings(){
        $sql = "SELECT * FROM `bookings` INNER JOIN user_cred ON bookings.id_user = user_cred.id order by bookings.id desc";
        $result = pdo_query($sql);
        return $result;
    }
    

    function load_booking_user($id){
        $sql = "SELECT checkin,checkout,rooms.price, us.id, rooms.name,amount,booking_status,room_id FROM `bookings` as bk
        INNER JOIN user_cred as us ON bk.id_user=us.id
        INNER JOIN rooms ON bk.room_id=rooms.id
        WHERE bk.id_user = '$id' order by id desc";
        $result = pdo_query($sql);
        return $result;
    }

    function agree_booking_status($id){
        $sql = "UPDATE `bookings` SET `booking_status`='booked' WHERE `id`='$id'";
        pdo_execute($sql);
    }

    function cancel_booking_status($id){
        $sql = "UPDATE `bookings` SET `booking_status`='cancel' WHERE `id`='$id'";
        pdo_execute($sql);
    }

    function again_booking_status($id){
        $sql = "UPDATE `bookings` SET `booking_status`='wait' WHERE `id`='$id'";
        pdo_execute($sql);
    }

    function insert_booking($room_id, $checkin, $checkout, $id_user, $amount){
        $sql = "INSERT INTO `bookings`(`room_id`, `checkin`, `checkout`, `id_user`, `amount`) VALUES ('$room_id', '$checkin', '$checkout', '$id_user', '$amount')";
        pdo_execute($sql);
    }
?>