<?php
    session_start();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    include '../model/pdo.php';
    include '../model/bookings.php';
    include '../model/rooms.php';
    if(isset($_POST['payUrl'])){
        function execPostRequest($url, $data)
        {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data))
            );
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            //execute post
            $result = curl_exec($ch);
            //close connection
            curl_close($ch);
            return $result;
        }

        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = $_SESSION['room']['payment'];
        $orderId = rand(00,9999);
        $redirectUrl = "http://localhost/DuAn1/DuAn1_Nhom2/index.php?act=thanks";
        $ipnUrl = "http://localhost/DuAn1/DuAn1_Nhom2/index.php?act=thanks";
        $extraData = "";


        $partnerCode = $partnerCode;
        $accessKey = $accessKey;
        $serectkey = $secretKey;
        $orderId = $orderId; // Mã đơn hàng
        $orderInfo = $orderInfo;
        $amount = $amount;
        $ipnUrl = $ipnUrl;
        $redirectUrl = $redirectUrl;
        $extraData = $extraData;

        $requestId = time() . "";
        $requestType = "payWithATM";
        // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $serectkey);
        $data = array('partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature);
        $result = execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json
        // print_r($jsonResult);
        //Just a example, please check more in there
        header('Location: ' . $jsonResult['payUrl']);
            // print_r($_SESSION['room']['payment']);
            // print_r($_SESSION['user']['id']);
            // print_r($_POST['checkout']);
            // print_r($_POST['checkin']);
            // print_r($_SESSION['room']['id']);
            insert_booking($_SESSION['room']['id'], $_POST['checkin'], $_POST['checkout'], $_SESSION['user']['id'], $_SESSION['room']['payment'],date('Y-m-d H:i:s'));
            update_room_status($_SESSION['room']['id']);
    }
    // $one_room = load_one_room($_SESSION['room']['id']);
    // print_r($one_room);
?>