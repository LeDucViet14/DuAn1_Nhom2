<?php
    function insert_room_type($name, $price, $children, $adult, $img){
        $sql = "INSERT INTO `room_type`(`name`, `price`, `children`, `adult`, `img`) VALUES ('$name','$price','$children','$adult','$img')";
        pdo_execute($sql);
    }

    function delete_room_type($id){
        $sql = "DELETE FROM `room_type` WHERE id = '$id'";
        pdo_execute($sql);
    }

    function load_one_room_type($id){
        $sql = "SELECT * FROM `room_type` WHERE id = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_room_type($idroom_type, $name, $price, $children, $adult, $description, $Facilities1, $Facilities2, $Facilities3, $Facilities4, $Features1, $Features2, $Features3, $Features4, $target_flie){
        $sql = "UPDATE `room_type` SET `name`='$name',`price`='$price',`children`='$children',`adult`='$adult',`img`='$target_flie',`description`='$description',`facilities1`='$Facilities1',`facilities2`='$Facilities2',`facilities3`='$Facilities3',`facilities4`='$Facilities4',`features1`='$Features1',`features2`='$Features2',`features3`='$Features3',`features4`='$Features4' WHERE `id`='$idroom_type'";
        pdo_execute($sql);
    }

    function load_3_room_type(){
        $sql = "SELECT * FROM `room_type` WHERE 1 order by id asc limit 0,3";
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_room_type(){
        $sql = "SELECT * FROM `room_type` WHERE 1";
        $result = pdo_query($sql);
        return $result;
    }
?>