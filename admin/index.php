<?php
  session_start();
  include '../model/pdo.php';
  include '../model/login_admin.php';
  include '../model/essentials.php';
  adminLogin(); 
  include './inc/links.php';
  include './inc/scripts.php';
  include 'header.php';

  if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
      case 'dashboard':
        include 'dashboard.php';
        break;
      case 'settings':
        include "settings.php";
        break;
      default:
        # code...
        break;
    }
  }
?>