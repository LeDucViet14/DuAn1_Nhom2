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

  include '../model/rooms.php';

  adminLogin(); 
  include './inc/links.php';
  include './inc/scripts.php';
  include 'header.php'; 
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
      // case "rooms":

      //   if(isset($_POST['add_room'])){
      //     $name = $_POST['name'];
      //     $id_room_type = $_POST['id_room_type'];
      //     // $area = $_POST['are'];
      //     // $children = $_POST['children'];
      //     // $adult = $_POST['adult'];
      //     // $price = $_POST['price'];
      //     // $description = $_POST['description'];
      //     $insert_room = insert_room($name,$id_room_type);

      //   //   $room_id_max = select_id_max_room();
      //   //   if(isset($_POST['features']) && is_array($_POST['features'])){
      //   //     foreach($_POST['features'] as $value){
      //   //       insert_room_feature($room_id_max['id'], $value);
      //   //     }  
      //   //   }  

      //   //   if(isset($_POST['facility']) && is_array($_POST['facility'])){
      //   //       foreach($_POST['facility'] as $value){
      //   //         insert_room_facilities($room_id_max['id'], $value);
      //   //     }  
      //   //   }  
      //     alert("success","Add room successfully!");
      //   }
        
      //   include 'room/list.php';
      //   break;

      // case "edit_room_type":
      //   if(isset($_GET['id']) && $_GET['id'] > 0){
      //     $one_room = select_room_one($_GET['id']);
      //   }
      //   $list_room_type = load_room_type();
      //   include 'room/update.php';
      //   break;

      // case 'update_room_type':
      //   if(isset($_POST['update_room'])){
      //     $name = $_POST['name'];
      //     $idroom = $_POST['room_id'];
      //     $id_room_type = $_POST['id_room_type'];
      //     update_room($name,$id_room_type,$idroom);
      //     header("location: index.php?act=rooms");
      //     alert("success","Update room successfully!");
      //   }
      //   break;

      // case "delete_room":
      //   if(isset($_GET['id']) && $_GET['id']>0) {
      //       delete_room($_GET['id']);
      //       header("location: index.php?act=rooms");
            
      //   }
      //   break;
      
      case "rooms":
        include "rooms/list.php";
        
        break;
      
      // case "add_room":
      //   if(isset($_POST['add_room_type'])){
      //     $isCheck = true;
      //     $data = filteration($_POST);
      //     $name = $data['name'];
      //     $price = $data['price'];
      //     $children = $data['children'];
      //     $adult = $data['adult'];

      //     $avatarPath ="";
      //     $avatarName = $_FILES["img"]["name"];
      //     $avatarTmpName = $_FILES["img"]["tmp_name"];
      //     $avatarPath = "upload_admin/" . basename($avatarName);
      //     move_uploaded_file($avatarTmpName, $avatarPath); 

      //     insert_room_type($name, $price, $children, $adult, $avatarPath);
      //     alert("success","Add Room Type Successfuly!");
          
      //   }
      //   include "room_type/list.php";
      //   break;
        
      // case "delete_room":
      //   if(isset($_GET['id']) && $_GET['id'] > 0){
      //     delete_room_type($_GET['id']);
      //     header("location: index.php?act=add_room_type");
      //   }
      //   break;
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
      // case "update_room":
      //   if(isset($_POST['update_room_type'])){
      //     $name = $_POST['name'];
      //     $idroom_type = $_POST['room_type_id'];
      //     $price = $_POST['price'];
      //     $children = $_POST['children'];
      //     $adult = $_POST['adult'];
      //     $description = $_POST['description'];
      //     $Facilities1 = $_POST['Facilities1'];
      //     $Facilities2 = $_POST['Facilities2'];
      //     $Facilities3 = $_POST['Facilities3'];
      //     $Facilities4 = $_POST['Facilities4'];
      //     $Features1 = $_POST['Features1'];
      //     $Features2 = $_POST['Features2'];
      //     $Features3 = $_POST['Features3'];
      //     $Features4 = $_POST['Features4'];

      //     $img = $_FILES["img"]["name"];
      //     $target_dir = "./upload_admin/";
      //     $target_flie = $target_dir.basename($img);
      //     update_room_type($idroom_type, $name, $price, $children, $adult, $description, $Facilities1, $Facilities2, $Facilities3, $Facilities4, $Features1, $Facilities2, $Facilities3, $Facilities4, $target_flie);
      //     if(move_uploaded_file($_FILES['img']['tmp_name'], $target_flie)){
      //         echo "upload ảnh thành công";
      //     }else{
      //         echo "upload ảnh không thành công";
      //     }

          
      //     header("location: index.php?act=add_room_type");
      //     alert("success","Update room successfully!");
      //   }
      //   break;











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

      
      default:
        # code...
        break;
    }
  }
?>