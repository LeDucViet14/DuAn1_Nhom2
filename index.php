<?php
    session_start();
    include "model/contact.php";
    include "model/about.php";
    include "model/pdo.php";
    include "model/essentials.php";
    include "model/rooms.php";
    include "model/login_user.php";
    include "global.php";
    include "view/header.php";
    $contact_home = loadContact();
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
                include 'view/rooms_details.php';
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
                        // echo '<script>location.reload();</script>';
                    }else{
                        alert("error","account or password is incorrect!");
                    }
                }
                include "view/home.php";
                break;
            case "logout":
                logout();
                alert("success","logged out");
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
                if(isset($_POST['update_info'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $dob = $_POST['dob'];
                    $pincode = $_POST['pincode'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $img = $_FILES["profile"]["name"];
                    $target_dir = "upload/";
                    $target_flie = $target_dir.basename($img);
                    $update_info = update_info($id,$name,$phone,$dob,$pincode,$address,$email,$target_flie);
                    if(move_uploaded_file($_FILES["profile"]["tmp_name"], $target_flie)){
                        // echo "upload ảnh thành công";
                    }else{
                        // echo "upload ảnh không thành công";
                    }   
                    $_SESSION['user'] = $update_info;
                    alert("success","Update successful. Please log in again !");
                }else{
                    alert("error","Update failed");
                }
                include "view/profile.php";
                break;

            default:
            include "view/home.php";
            break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";
?>