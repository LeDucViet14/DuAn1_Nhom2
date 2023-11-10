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
?>