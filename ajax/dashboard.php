<?php
    include "../model/pdo.php";
    include "../model/bookings.php";
    
    if(isset($_POST['booking_analytics'])){
        $frm_data = filteration($_POST);
        $condition="";
        if($frm_data['period'] == 1){
            $condition = "WHERE datetime BETWEEN NOW() - INTERVAL 30 DAY AND NOW()";
        }else if($frm_data['period'] == 2){
            $condition = "WHERE datetime BETWEEN NOW() - INTERVAL 90 DAY AND NOW()";
        }else if($frm_data['period'] == 3){
            $condition = "WHERE datetime BETWEEN NOW() - INTERVAL 1 YEAR AND NOW()";
        }else if($frm_data['period'] == 4){
            $condition="";
        }
        $total_bookings = total_bookings($condition);
        $output = json_encode($total_bookings);
        echo $output;
    }
?>