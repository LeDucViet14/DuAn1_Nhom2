<?php
session_start();
include '../model/pdo.php';
include '../model/login_admin.php';
include '../model/essentials.php';
adminLogin();
include './inc/links.php';
include './inc/scripts.php';
include 'header.php';
include '../model/users.php';

if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case 'dashboard':
      include 'dashboard.php';
      break;
    case 'settings':
      include "settings.php";
      break;
    case 'users':
      // $sql = "SELECT * FROM user_cred";
      // $rows = pdo_query($sql);
      // $count = 1;  // Biến đếm
      $list_user = loadall_user();
      include "./users/users.php";
      break;
    case 'deleteusers':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_user($_GET['id']);
      }
      $list_user = loadall_user();
      include "./users/users.php";
      break;
    case 'suausers':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $user = loadone_user($_GET['id']);
      }
      $list_user = loadall_user();
      include "./users/update.php";
      break;
    case "updateusers":
      if (isset($_POST['capnhat'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phonenum'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $img = $_FILES["profile"]["name"];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($img);
        $update_user = update_user($id, $name, $phone, $dob, $address, $email, $password, $target_file);
        if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
          // Ảnh đã được tải lên thành công
        } else {
          // Lỗi khi tải ảnh lên
        }
      }
      $list_user = loadall_user();
      include "./users/users.php";
      break;
    case 'rooms':
      include "rooms.php";
      break;
    default:
      break;
  }
}

?>
<link rel="stylesheet" href="../upload/">