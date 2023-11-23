<?php
    function loadall_room(){
        $sql = 'SELECT * FROM `rooms` WHERE 1';
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_features_room($id_room){
        $sql = "SELECT f.name FROM `features` as f 
        INNER JOIN `room_features` as rf ON f.id = rf.features_id
        WHERE rf.room_id = $id_room";
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_facilities_room($id_room){
        $sql= "SELECT f.name FROM `facilities` as f
        INNER JOIN `room_facilities` as rf
        ON f.id = rf.facilities_id
        WHERE rf.room_id=$id_room";
        $result = pdo_query($sql);
        return $result;
    }

    function insert_room($name,$id_room_type){
        $sql = "INSERT INTO `rooms`(`name`, `id_room_type`) VALUES ('$name','$id_room_type')";
        pdo_execute($sql);
    }

    function insert_room_feature($room_id, $feature_id){
        $sql = "INSERT INTO `room_features`(`room_id`, `features_id`) VALUES ('$room_id','$feature_id')";
        pdo_execute($sql);
    }

    function insert_room_facilities($room_id, $facility_id){
        $sql = "INSERT INTO `room_facilities`(`room_id`, `facilities_id`) VALUES ('$room_id','$facility_id')";
        pdo_execute($sql);
    }

    function select_id_max_room(){
        $sql = "SELECT * FROM `rooms` ORDER BY id DESC LIMIT 1";
        $result = pdo_query_one($sql);
        return $result;
    }

    function select_room_one($id){
        $sql = "SELECT * FROM `rooms` WHERE id = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function load_room_facilities($id){
        $sql = "SELECT * FROM `room_facilities` WHERE room_id = '$id'";
        $result = pdo_query($sql);
        return $result;
    }

    function update_room($name,$id_room_type,$idroom){
        $sql = "UPDATE `rooms` SET `name`='$name',`id_room_type`='$id_room_type'
        WHERE id = $idroom";
        pdo_execute($sql);
    }

    function update_room_facilities($facility_id, $room_id){
        $sql = "UPDATE `room_facilities` SET `facilities_id`='$facility_id' WHERE `room_id`='$room_id'";
        pdo_execute($sql);
    }

    function update_room_features($feature_id, $room_id){
        $sql = "UPDATE `room_features` SET `features_id`='$feature_id' WHERE `room_id`='$room_id'";
        pdo_execute($sql);
    }

    function load_room_type(){
        $sql = "SELECT * FROM `room_type` WHERE 1";
        $result = pdo_query($sql);
        return $result;
    }

    function delete_room($id){
        $sql = "DELETE FROM `rooms` WHERE id = '$id'";
        pdo_execute($sql);
    }
?>