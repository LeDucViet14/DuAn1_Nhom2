<?php
  session_start();
  include '../model/pdo.php';
  include '../model/login_admin.php';
  include '../model/essentials.php';
  include '../model/features.php';
  include '../model/facilities.php';
  include '../model/contact.php';
  include '../model/settings.php';
  include '../model/room_type.php';
  include '../model/users.php';
  include '../model/admin.php';
  include '../model/cmt.php';

  include '../model/rooms.php';

  adminLogin(); 
  include './inc/links.php';
  include './inc/scripts.php';
  // include 'header.php'; 
  $features = loadall_features();
  $facilities = loadall_facities();
  $list_room_type = loadall_room_type();
  // $all_rooms = loadall_room();
  $all_rooms = loadall_room();
  // print_r($all_rooms);
  if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
      case 'dashboard':
        include 'dashboard.php';
        break;
      
      case "rooms":
        include "rooms/list.php";
        
        break;
      
      case "add_room":
        if(isset($_POST['add_room'])){
          $name = $_POST['name'];
          $price = $_POST['price'];
          $children = $_POST['children'];
          $adult = $_POST['adult'];
          $id_room_type = $_POST['id_room_type'];
          $description = $_POST['description'];
          $Facilities1 = $_POST['Facilities1'];
          $Facilities2 = $_POST['Facilities2'];
          $Facilities3 = $_POST['Facilities3'];
          $Facilities4 = $_POST['Facilities4'];
          $Features1 = $_POST['Features1'];
          $Features2 = $_POST['Features2'];
          $Features3 = $_POST['Features3'];
          $Features4 = $_POST['Features4'];
          $img = $_FILES["img"]["name"];
          $target_dir = "./upload_admin/";
          $target_flie = $target_dir.basename($img);
          insert_room($name, $price, $children, $adult, $id_room_type, $description, $Facilities1, $Facilities2, $Facilities3, $Facilities4, $Features1, $Features2, $Features3, $Features4, $target_flie);
          if(move_uploaded_file($_FILES['img']['tmp_name'], $target_flie)){
            // echo "upload ảnh thành công";
          }else{
            // echo "upload ảnh không thành công";
          }
          header("location: index.php?act=rooms");
        }
        break;

      case "edit_room":
        if(isset($_GET['id']) && $_GET['id'] > 0){
          $one_room = load_one_room($_GET['id']);
        }
        include "rooms/update.php";
        break;

      case "update_room":
        if(isset($_POST['update_room'])){
          $name = $_POST['name'];
          $price = $_POST['price'];
          $children = $_POST['children'];
          $adult = $_POST['adult'];
          $idroom_type = $_POST['idroom_type'];
          $description = $_POST['description'];
          $Facilities1 = $_POST['Facilities1'];
          $Facilities2 = $_POST['Facilities2'];
          $Facilities3 = $_POST['Facilities3'];
          $Facilities4 = $_POST['Facilities4'];
          $Features1 = $_POST['Features1'];
          $Features2 = $_POST['Features2'];
          $Features3 = $_POST['Features3'];
          $Features4 = $_POST['Features4'];
          $idroom = $_POST['room_id'];
          $img = $_FILES["img"]["name"];
          $target_dir = "./upload_admin/";
          $target_flie = $target_dir.basename($img);
          update_rooms($idroom,$idroom_type, $name, $price, $children, $adult, $description, $Facilities1, $Facilities2, $Facilities3, $Facilities4, $Features1, $Features2, $Features3, $Features4, $target_flie);
          if(move_uploaded_file($_FILES['img']['tmp_name'], $target_flie)){
              // echo "upload ảnh thành công";
          }else{
              // echo "upload ảnh không thành công";
          }
 
              header("location: index.php?act=rooms");
              alert("success","Update room successfully!");
          }
        break;

        case "delete_room":
          if(isset($_GET['id']) && $_GET['id'] > 0){
              delete_room($_GET['id']);
              header("location: index.php?act=rooms");
          }
          break;

        case "room_type":
          include "rooms_type/list.php";
          break;

        case "add_room_type":
          if(isset($_POST['add_room_type'])){
            $name = $_POST['name'];
            insert_room_type($name);
            header("location: index.php?act=room_type");
          }
          break;

        case "edit_room_type":
          if(isset($_GET['id']) && $_GET['id']>0){
            $one_room_type = load_one_room_type($_GET['id']);
            include 'rooms_type/update.php';
          }
          break;
        
        case "update_room_type":
          if(isset($_POST['update_room_type'])){
            $name = $_POST['name'];
            $id = $_POST['room_type_id'];
            update_room_type($name, $id);
            header("location: index.php?act=room_type");
          }
          break;

        case "delete_room_type":
          if(isset($_GET['id']) && $_GET['id']>0){
            delete_room_type($_GET['id']);
            header("location: index.php?act=room_type");
          }
          break;
        
        // facilities
        case "facilities":
          include "facilities/list.php";
          break;

        case "add_facilities":
          if(isset($_POST['add_facilities'])){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $icon = $_FILES['icon']['name'];
            $target_dir = "./upload_admin/";
            $target_flie = $target_dir.basename($icon);  
            if(move_uploaded_file($_FILES['icon']['tmp_name'], $target_flie)){
              // echo "upload ảnh thành công";
            }else{
                // echo "upload ảnh không thành công";
            }
            insert_facilities($name, $target_flie, $description);
            header('location: index.php?act=facilities');
          }
          break;

        case "delete_facilities":
          if(isset($_GET['id']) && $_GET['id']>0){
            delete_facilities($_GET['id']);
            header('location: index.php?act=facilities');
          }
          break;
        
        case "edit_facilities":
          if(isset($_GET['id']) && $_GET['id'] > 0){
            $one_facilities =load_one_facilities($_GET['id']);
          }
          include "facilities/update.php";
          break;
        
        case "update_facilities":
          if(isset($_POST['update_facilities'])){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $icon = $_FILES['icon']['name'];
            $id = $_POST['id_facilities'];
            $target_dir = "./upload_admin/";
            $target_flie = $target_dir.basename($icon);
            update_facilities($name, $description, $target_flie,$id);
            if(move_uploaded_file($_FILES['icon']['tmp_name'], $target_flie)){
                // echo "upload ảnh thành công";
            }else{
                // echo "upload ảnh không thành công";
            }
            header('location: index.php?act=facilities');
          }
          break;

        //admin  
        case "admin":
          $listAdmin = loadall_admin();
          include "admin/list.php";
          break;
        
        case "add_admin":
          if(isset($_POST['add_admin'])){
            $ischeck = true;
            $name = $_POST['name'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $listAdmin = loadall_admin();
            foreach($listAdmin as $admin){
              if($admin['admin_name'] == $name){
                $ischeck = false;
                header("location: index.php?act=admin");
                alert("error","This admin account already exists !");
              }
            }
            if($ischeck){
              insert_admin($name, $password, $role);
              header("location: index.php?act=admin");
            }
          }
          break;

        case "delete_admin":
          if(isset($_GET['id']) && $_GET['id'] > 0){
            delete_admin($_GET['id']);
            header("location: index.php?act=admin");
          }
          break;

        case "edit_admin":
          if(isset($_GET['id']) && $_GET['id'] > 0){
            $one_admin = load_one_admin($_GET['id']);
          }
          include "admin/update.php";
          break;

        case "update_admin":
          if(isset($_POST['update_admin'])){
            print_r($_POST);
            $name = $_POST['name'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $id_admin = $_POST['id_admin'];
            update_admin($id_admin, $name, $password, $role);
            header("location: index.php?act=admin");
          }
          break;
        //comments
        case 'cmt':
          $list_cmt = loadall_cmt();
          include "./comment/cmt.php";
          break;
        case 'deletecmt':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            delete_cmt($_GET['id']);
          }
          $list_cmt = loadall_cmt();
          include "./comment/cmt.php";
          break;








      case 'settings':
        $general_settings = loadall_general_settings();
        $contact = loadContact();
        // print_r($contact);
        if(isset($_POST['update_general'])){
          $data = filteration($_POST);
          $name_ht = $data['name_ht'];
          $about_us = $data['about_us'];
          update_general_settings($name_ht, $about_us);
          alert("success","Update General Settings successfully!");
        }

        if(isset($_POST['update_contact'])){
          $address = $_POST['address'];
          $ggmap = $_POST['ggmap'];
          $pn1 = $_POST['pn1'];
          $pn2 = $_POST['pn2'];
          $email = $_POST['email'];
          $fb = $_POST['fb'];
          $tw = $_POST['tw'];
          $insta = $_POST['insta'];
          $iframe = $_POST['iframe'];
          update_contact($address, $ggmap, $pn1, $pn2, $email, $fb, $tw, $insta, $iframe);
          alert("success", "Update contact Successfully!");
        }
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

      
      default:
        # code...
        break;
    }
  }

