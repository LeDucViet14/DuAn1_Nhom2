<?php
    session_start();
    include "model/contact.php";
    include "model/about.php";
    include "model/pdo.php";
    include "model/essentials.php";
    include "model/rooms.php";
    include "model/login_user.php";
    include "model/settings.php";
    include "model/room_type.php";
    include "model/comments.php";
    include "model/facilities.php";
    // include "model/bookings.php";
    include "global.php";
    $contact_home = loadContact();
    $general_settings = loadall_general_settings();
    $three_rooms = load_3_room();
    $all_comments = loadall_comment();
    $all_room = loadall_room();
    $facilities = loadall_facities();
    include "view/header.php";
    if(isset($_GET['act']) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                include "view/home.php";
                break;

            case 'about':
                $about = load_about();
                include "view/about.php";
                break;

            case 'contact':
                include "view/contact.php";
                break;

            case 'facilities':
                include "view/facilities.php";
                break;

            case 'rooms':
                include "view/rooms.php";
                break;

            case 'room_details':
                include "model/bookings.php";
                if(isset($_GET['id']) && $_GET['id'] >0){
                    $one_room = load_one_room($_GET['id']);
                    // $comments = load_comments($_GET['id']);
                    $comments = load_comments($_GET['id']);
                    // $bookings = load_all_bookings();
                    $booking = load_one_booking($_GET['id']);

                    if(isset($_POST['review'])){
                        insert_comment($_GET['id'],$_POST['content'],$_SESSION['user']['id']);
                        // print_r($_POST['content']);
                        // print_r($_GET['id']);
                        // print_r($_SESSION['user']['id']);
                    }

                    include 'view/rooms_details.php';
                }
                break;
            
            case 'confirm_booking':
                $ischeck = true;
                if(!isset($_SESSION['user'])){
                    include 'view/home.php';
                    alert("erorr","You are not logged in");
                    $ischeck = false;
                    // echo "<script>window.location.href='index.php?act=home'</script>";
                }
                if(isset($_GET['id']) && $_GET['id'] >0){
                    $one_room = load_one_room($_GET['id']);
                }
                if($ischeck){
                    include 'view/confirm_booking.php';
                }
                break;


            case 'register':
                if(isset($_POST['register'])){
                    $data = filteration($_POST);
                    $ischeck = true;
                    if($data['pass'] != $data['cpass']){
                        // echo 'pass_mismatch';
                        // exit;
                        alert('error','pass_mismatch');
                        $ischeck = false;
                    }
                    
                    $name = $data["name"];
                    $email = $data["email"];
                    // $password = password_hash($data["pass"], PASSWORD_DEFAULT);
                    $password = $data["pass"];
                    $phonenum = $data["phonenum"];
                    $address = $data["address"];
                    $dob = $data["dob"];
                    $pincode = $data["pincode"];

                    // Xử lý hình ảnh
                    // $targetDir = "upload/";
                    // $targetFile = $targetDir . basename($_FILES["profile"]["name"]);
                    // $uploadOk = 1;
                    // $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                    // Kiểm tra xem tệp có phải là hình ảnh hay không
                    $avatarPath ="";
                    $avatarName = $_FILES["profile"]["name"];
                    $avatarTmpName = $_FILES["profile"]["tmp_name"];
                    $avatarPath = "./upload/" . $avatarName;
                    move_uploaded_file($avatarTmpName, $avatarPath);

                    // $hinh = $_FILES["profile"]["name"];
                    // $target_dir = './upload/'; // nơi lưu ảnh
                    // $target_flie = $target_dir.basename($hinh);
                    // if(move_uploaded_file($_FILES["profile"]["name"], $target_flie)){
                    //     // echo "upload ảnh thành công";
                    // }else{
                    //     // echo "upload ảnh không thành công";
                    // }

                    $users = loadall_user();
                    foreach($users as $user){
                        if($email == $user['email']){
                            alert('error', 'Account already exists');
                            $ischeck = false;
                        }
                    }
                    if($ischeck){
                        insert_user($name,$email, $address,$phonenum,$dob,$pincode,$avatarPath,$password);
                        alert('success','Successfully registered account');
                    }
                }
                include 'view/home.php';
                break;

            case "login_user":
                if(isset($_POST['login_user'])){
                    $frm_data = filteration($_POST);
                    $checkuser = login($frm_data['email_user'], $frm_data['password']);
                    if(is_array($checkuser)){
                        alert("success","Logged in successfully!");
                        $_SESSION['user'] = $checkuser;
                        echo "<script>window.location.href='index.php?act=home'</script>";
                    }else{
                        alert("error","account or password is incorrect!");
                    }
                }
                include "view/home.php";
                break;
            case "logout":
                logout();
                alert("success","logged out");
                echo "<script>window.location.href='index.php?act=home'</script>";
                include "view/home.php";
                break;
            
            case "forgotpass":
                if(isset($_POST['sendlink'])){
                    $sendMailMess = sendMail($_POST['email']);
                    if(is_array($sendMailMess)){
                        $passnew = rand_tring(8);
                        $email = $sendMailMess['email'];
                        sendMailPass($email, $sendMailMess['name'], $passnew);
                        update_pass($passnew, $email);
                        alert("success","Sent the link to your email");
                    }else{
                        alert("error","Email does not exist");
                    }
                }
                include 'view/home.php';
                break;
            
            case "profile":
                if(!isset($_SESSION['user'])){
                    echo "<script>window.location.href='index.php?act=home'</script>";
                }
                if(isset($_POST['update_info'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $password = $_POST['password'];
                    $dob = $_POST['dob'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $img = $_FILES["profile"]["name"];
                    $target_dir = "upload/";
                    $target_flie = $target_dir.basename($img);
                    $update_info = update_info($id,$name,$phone,$dob,$address,$email,$target_flie,$password);
                    if(move_uploaded_file($_FILES["profile"]["tmp_name"], $target_flie)){
                        // echo "upload ảnh thành công";
                    }else{
                        // echo "upload ảnh không thành công";
                    }   
                    $_SESSION['user'] = $update_info;
                    alert("success","Update successful. Please log in again !");
                    echo "<script>window.location.href='index.php?act=home'</script>";
                }
                include "view/profile.php";
                break;

            case "bookings":
                include "model/bookings.php";
                if(!isset($_SESSION['user'])){
                    echo "<script>window.location.href='index.php?act=home'</script>";
                }
                $booking_user = load_booking_user($_SESSION['user']['id']);
                // echo '<pre>';
                // print_r($booking_user);
                include 'view/bookings.php';
                break;
            

            default:
            include "view/home.php";
            break;

            case "thanks":
                if(!isset($_SESSION['user'])){
                    echo "<script>window.location.href='index.php?act=home'</script>";
                }
                include 'view/thanks.php';
                break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";
?>