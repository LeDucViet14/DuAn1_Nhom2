<?php
            session_start();

    include "../model/pdo.php";
    include "../model/bookings.php";
    date_default_timezone_set("Asia/Ho_Chi_Minh");

    if(isset($_POST['check_availability'])){
        $frm_data = filteration($_POST);
        $status = "";
        $result = "";

        $today_date = new DateTime(date('Y-m-d'));
        $checkin_date = new DateTime($frm_data['check_in']);
        $checkout_date = new DateTime($frm_data['check_out']);
        // $check_room =check_room($_SESSION['room']['id'], $frm_data['check_in'], $frm_data['check_in']);
        $bookings = load_one_booking($_SESSION['room']['id']);
        
        
        foreach($bookings as $bk){
            if( ($bk['checkin'] >= $frm_data['check_in'] && $bk['checkin'] <= $frm_data['check_out']) 
            || ($bk['checkout'] >= $frm_data['check_in'] && $bk['checkout'] <= $frm_data['check_out']) ){
                $status = "unavailable";
                $result = json_encode(["status"=>$status]);
            }
        }
        if($checkin_date == $checkout_date){
            $status = "check_in_out_equal";
            $result = json_encode(["status"=>$status]);
        }else if($checkout_date < $checkin_date){
            $status = "check_out_earlier";
            $result = json_encode(["status"=>$status]);
        }else if($checkin_date < $today_date){
            $status = "check_in_earlier";
            $result = json_encode(["status"=>$status]);
        }

        
        // foreach($check_room as $cr){
        //     if(is_array($cr) && $cr == true){
        //         $status = "unavailable";
        //         $result = json_encode(["status"=>$status]);
        //     }
        // }
        

        if($status!=''){
            echo $result;
        }else{
            // $_SESSION['room'];
            // foreach($check_room as $bk_room){
            //     if(is_array($bk_room)){
            //         $status = "unavailable";
            //         $result = json_encode(["status"=>$status]);
            //     }
            // }
            // print_r($check_room);
            
            
            $count_days = date_diff($checkin_date, $checkout_date)->days;
            $payment = $_SESSION['room']['price']*$count_days;
            $_SESSION['room']['payment']=$payment;
            $_SESSION['room']['available']=true;

            $result = json_encode(["status"=>'available', "days"=>$count_days, "payment"=>$payment]);
            echo $result;
        }

    }
?>