<?php

   include_once '../config/DBConnect.php';

     $name=$_POST['name'];
     $email=$_POST['email'];
     $password=MD5($_POST['password']);
     $usertype=$_POST['userType'];
     $database = new dbConnect();

     $db = $database->openConnection();

     $sql = "insert into tbl_registered_users (name, email, password,user_type) values ('$name', '$email', '$password',$usertype)" ;

     $affectedrows  = $db->exec($sql);


   if(isset($affectedrows))

    {
     header('location:../listuser.php');

    }

  else
  {

   echo "There is some problem in connection: " . $e->getMessage();

   }
	//header('location:index.php');

?>
