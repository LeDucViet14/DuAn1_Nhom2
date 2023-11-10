<?php
    function loadContact(){
        $sql = "SELECT * FROM `contact_details` WHERE 1";
        $result = pdo_query($sql);
        return $result;
    }
?>