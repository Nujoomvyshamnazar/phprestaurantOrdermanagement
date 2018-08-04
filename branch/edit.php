<?php

   include_once '../config/DBConnect.php';

	$id=$_GET['id'];
	 $branchname=$_POST['branchname'];
$branchcode=$_POST['code'];
$branchlocation=$_POST['location'];
$branchaddress=$_POST['address'];
//echo $id;
     $database = new dbConnect();

     $db = $database->openConnection();

   //  $sql = "DELETE FROM tbl_registered_users WHERE `id` = $id" ;
    $sql = "UPDATE branches SET branch_name= '$branchname' , branch_code = '$branchcode' , branch_location = '$branchlocation' ,branch_address='$branchaddress' WHERE branch_id = $id" ;
  $affectedrows  = $db->exec($sql);

echo $id;

   if(isset($affectedrows))

    {
     header('location:../listbranch.php');

    }

  else
  {

   echo "There is some problem in connection";

   }
	//header('location:index.php');

?>
