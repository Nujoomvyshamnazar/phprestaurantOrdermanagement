<?php

   include_once '../config/DBConnect.php';

	$id=$_GET['id'];
     $database = new dbConnect();

     $db = $database->openConnection();

     $sql = "DELETE FROM branches WHERE `branch_id` = $id" ;

     $affectedrows  = $db->exec($sql);


   if(isset($affectedrows))

    {
    header('location:../listbranch.php');

    }

  else
  {

   echo "There is some problem in connection: " . $e->getMessage();

   }
	//header('location:index.php');

?>
