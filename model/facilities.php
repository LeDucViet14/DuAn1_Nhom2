<?php
    function loadall_facities(){
        $sql = "SELECT * FROM `facilities` WHERE 1";
        $result = pdo_query($sql);
        return $result;
    }
?>