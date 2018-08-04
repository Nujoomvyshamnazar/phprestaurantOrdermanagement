<?php

   include_once '../config/DBConnect.php';

	$id=$_GET['id'];
  $file= $_GET['img'];


  unlink('../product/'.$file);

     $database = new dbConnect();

     $db = $database->openConnection();

     $sql = "DELETE FROM tbl_product WHERE `id` = $id" ;

     $affectedrows  = $db->exec($sql);


   if(isset($affectedrows))

    {

    header('location:../listitems.php');

    }

  else
  {

   echo "There is some problem in connection: " . $e->getMessage();

   }
	//header('location:index.php');

?>
