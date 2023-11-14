<?php
  session_start();
  include '../model/pdo.php';
  include '../model/login_admin.php';
  include '../model/essentials.php';


  if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
      case 'login':
        include 'login.php';
        if(isset($_POST['login'])){
          $frm_data = filteration($_POST);
          // print_r($frm_data);
          $check_admin = dangnhap_admin($_POST['admin_name'],$_POST['admin_pass']);
          if(is_array($check_admin)){
            $_SESSION['admin'] = $check_admin;
            alert("success", "Login success!");
            header("location: index.php?act=dashboard");
          }else{
            alert("error", "Login failed!");
          }
        }
        break;
      case 'dashboard':
        include 'dashboard.php';
        break;
      case 'logout':
        include 'logout.php';
        break;
      default:
        # code...
        break;
    }
  }
?>