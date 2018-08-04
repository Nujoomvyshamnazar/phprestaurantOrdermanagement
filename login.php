<?php
session_start();
if (isset($_POST["submit"])) {
    include_once 'config/DBConnect.php';
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    
    $sql = "select * from tbl_registered_users where email = '$email' and password= '$password'";
    $user = $db->query($sql);
    $result = $user->fetchAll(PDO::FETCH_ASSOC);
    
    $id = $result[0]['id'];
    $name = $result[0]['name'];
    $email = $result[0]['email'];
    $type = $result[0]['user_type'];
    $_SESSION['name'] = $name;
    $_SESSION['id'] = $id;
    $_SESSION['type'] = $type;
    
    $database->closeConnection();
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Pure Punjabi Order Management System</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
    
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    
                            <form class="form-horizontal" action="" method="POST"
            onsubmit="return loginvalidation();">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="email" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                       <!-- <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>-->
                        <div class="col-md-6">
                            
                                
                <div>
                    <button type="submit" name="submit"
                        class="btn btn-info btn-block">Login</button>
                </div>
       
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2018 Purepunjabi
                    </div>
                
                </div>
            </div>
            
        </div>
        
    </body>
</html>






