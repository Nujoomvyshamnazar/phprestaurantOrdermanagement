<?php

error_reporting( ~E_NOTICE );

if(isset($_POST['btn_save_updates']))
{
  include_once '../config/DBConnect.php';

    $itemname=$_POST['itemname'];
    $itemcode=$_POST['itemcode'];
    $itemprice=$_POST['itemprice'];
    $imgFile = $_FILES['itemimg']['name'];
    $tmp_dir = $_FILES['itemimg']['tmp_name'];
    $imgSize = $_FILES['itemimg']['size'];
       if(empty($itemname)){
           $errMSG = "Please Enter Username.";
         }
         else if(empty($itemcode)){
           $errMSG = "Please Enter Your Job Work.";
         }
         else if(empty($imgFile)){
           $errMSG = "Please Select Image File.";
         }
         else
         {
           $upload_dir = '../product/'; // upload directory

           $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

           // valid image extensions
           $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

           // rename uploading image
           $userpic = rand(1000,1000000).".".$imgExt;

           // allow valid image file formats
           if(in_array($imgExt, $valid_extensions)){
             // Check file size '5MB'
             if($imgSize < 5000000)				{
               move_uploaded_file($tmp_dir,$upload_dir.$userpic);
             }
             else{
               $errMSG = "Sorry, your file is too large.";
             }
           }
           else{
             $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
           }
         }


         // if no error occured, continue ....
         if(!isset($errMSG))
         {
           $target = "../product/".basename($imgFile);

            if (move_uploaded_file($_FILES['itemimg']['tmp_name'], $target)) {
             $msg = "Image uploaded successfully";
            }else{
             $msg = "Failed to upload image";
          }

          $database = new dbConnect();

          $db = $database->openConnection();

          $sql = "insert into  tbl_product (name,code,image,price) values ('$itemname', '$itemcode', '$userpic','$itemprice')" ;

           if( $db->exec($sql))
           {
        header('location:../listitems.php');
           }
           else
           {
             $errMSG = "error while inserting....";
           }
         }


}

?>
