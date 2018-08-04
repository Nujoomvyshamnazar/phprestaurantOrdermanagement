<?php

//   error_reporting( ~E_NOTICE );
if(isset($_POST['update']))
{
   $id=$_REQUEST['id'];
echo $id;
  include_once '../config/DBConnect.php';

    $itemname=$_POST['itemname'];
    $itemcode=$_POST['itemcode'];
    $img=$_POST["image"];
    $itemprice=$_POST['itemprice'];
echo $img;
move_uploaded_file($_FILES["image"]["tmp_name"],"product/" . $_FILES["image"]["name"]);
$location1=$_FILES["image"]["name"];






    $database = new dbConnect();

    $db = $database->openConnection();

    $sql = "UPDATE  tbl_product SET 	name= '$itemname' , code = '$itemcode' , image = '$location1' ,price='$itemprice' WHERE id = $id" ;


    $affectedrows  = $db->exec($sql);


  if(isset($affectedrows))

   {
  //  header('location:../listitems.php');

   }

 else
 {

  echo "There is some problem in connection: " . $e->getMessage();

  }
 //header('location:index.php');


}
?>
