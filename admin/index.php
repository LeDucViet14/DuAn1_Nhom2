<?php
  session_start();
  include '../model/pdo.php';
  include '../model/login_admin.php';
  include '../model/essentials.php';
  include '../model/facilities.php';
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
      case 'addfacilities':
          if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $hinhicon=$_FILES['hinhicon']['name'];
            $tenfacilities=$_POST['tenfacilities'];
            $mota=$_POST['mota'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["hinhicon"]["name"]);
            if (move_uploaded_file($_FILES["hinhicon"]["tmp_name"], $target_file)) {
              //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
             // echo "Sorry, there was an error uploading your file.";
            }


            insert_facilities($hinhicon,$tenfacilities,$mota);
            $thongbao="Them thanh cong";
          }
              include "facilities/add.php";
              break;
          case 'listfacilities':
              $listfacilities=loadall_facilities();
              include "facilities/list.php";
              break;
          case 'xoafacilities':
              if(isset($_GET['id'])&&($_GET['id']>0)){
                  delete_facilities($_GET['id']);
              }
              $listfacilities=loadall_facilities();
              include "facilities/list.php";
              break;
          case 'suafacilities':
              if(isset($_GET['id'])&&($_GET['id']>0)){
                  $facilities=loadone_facilities($_GET['id']);
              }
              $listfacilities=loadall_facilities();
              include "facilities/update.php";
              break;
          case 'updatefacilities':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
              $id=$_POST['id'];
              $hinhicon=$_FILES['hinhicon']['name'];
              $tenfacilities=$_POST['tenfacilities'];
              $mota=$_POST['mota'];
              $target_dir = "../upload/";
              $target_file = $target_dir . basename($_FILES["hinhicon"]["name"]);
              if (move_uploaded_file($_FILES["hinhicon"]["tmp_name"], $target_file)) {
                //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
              } else {
               // echo "Sorry, there was an error uploading your file.";
              }
  
  
              update_facilities($id,$hinhicon,$tenfacilities,$mota);
              $thongbao="Cap nhat thanh cong";
            }
                $listfacilities=loadall_facilities();
                include "facilities/list.php";
                break;
      default:
        # code...
        break;
    }
  }
?>
