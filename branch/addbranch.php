<?php

   include_once '../config/DBConnect.php';

     $branchname=$_POST['branchname'];
     $code=$_POST['code'];
     $location=MD5($_POST['location']);
     $address=$_POST['address'];
     $database = new dbConnect();

     $db = $database->openConnection();

     $sql = "insert into branches (branch_name,branch_code, branch_location,branch_address) values ('$branchname', '$code', '$location','$address')" ;

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
