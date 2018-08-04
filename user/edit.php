<?php

   include_once '../config/DBConnect.php';

	$id=$_GET['id'];
	 $name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$usertype=$_POST['userType'];
//echo $id;
     $database = new dbConnect();
 
     $db = $database->openConnection();
 
   //  $sql = "DELETE FROM tbl_registered_users WHERE `id` = $id" ;
    $sql = "UPDATE tbl_registered_users SET name= '$name' , email = '$email' , password = '$password' ,user_type=$usertype WHERE id = $id" ;
  $affectedrows  = $db->exec($sql);

echo $id;
 
   if(isset($affectedrows))
 
    {
     header('location:../listuser.php');
 
    }          

  else
  {
 
   echo "There is some problem in connection";
 
   }
	//header('location:index.php');

?>