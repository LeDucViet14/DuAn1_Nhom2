<?php
    function load_comments($id){
        $sql = "SELECT cm.content, cm.date, cm.id_user, us.name, us.profile FROM `comments` as cm
        INNER JOIN user_cred as us ON cm.id_user = us.id 
        INNER JOIN room_type as rt ON cm.id_room_type = rt.id
        WHERE rt.id = '$id'";
        $resutl = pdo_query($sql);
        return $resutl;
    }

    function loadall_comment(){
        $sql = "SELECT cm.content, us.name, us.profile FROM `comments` as cm
        INNER JOIN user_cred as us ON cm.id_user = us.id 
        INNER JOIN room_type as rt ON cm.id_room_type = rt.id
        WHERE 1";
        $resutl = pdo_query($sql);
        return $resutl;
    }
?>