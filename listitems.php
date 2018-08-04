<?php session_start(); ?>
<?php if(isset($_SESSION["name"]))
{
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Items</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
         <link rel="stylesheet" type="text/css" id="theme" href="css/style.css"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                            <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Pure Punjabi</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">

                        <div class="profile">

                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $_SESSION["name"]; ?></div>
                                <div class="profile-data-title"><?php echo $_SESSION["type"]; ?></div>
                            </div>

                        </div>
                    </li>


          <?php

    include('parts/adminnav.php');
    ?>

                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->

                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                <?php include("parts/notification.php"); ?>
                    <!-- END MESSAGES -->

                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">List Items </a></li>

                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">List Items</h3>
                                    <ul class="panel-controls">


                                       <a href="#addnew" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add Product</a>

                                        <!-- Add New -->


                                        <?php include("models/additems.php") ?>

                                        </li>

                                    </ul>
                                </div>
                            	<?php     include_once 'config/DBConnect.php';
	  $database = new dbConnect();

    $db = $database->openConnection();


                           $sql = "select *from `tbl_product`";
                           $item = $db->query($sql);
                          // $result = $user->fetchAll(PDO::FETCH_ASSOC);

                            ?>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product Name</th>
                                                <th>Product Image</th>
                                                <th>Product Code</th>
                                                <th>Product Price</th>
                                                <th>Action</th><?php ?>

                                            </tr>
                                        </thead>
                                        <tbody>

                                      <?php     while ($row = $item->fetch()) {
                                ?>                                            <tr>
                                                <td><?=  $row['id'] ?></td>
                                                <td><?=  $row['name'] ?></td>
                                                <td><img src="product/<?=  $row['image'] ?>" style="border-radius: 100%;
    height: 80px;"/></td>
                                                <td><?=  $row['code'] ?></td>
                                                <td><?=  $row['price'] ?></td>

                                <td>
							<a href="#edit<?=  $row['id'] ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> ||
							<a href="#del<?=  $row['id'] ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
					</td> <?php
                                                  include('models/items.php');
                                                  include('models/deleteitem.php');
                                            }?>



                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->




        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
             <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>

        <!-- END PAGE PLUGINS -->
        <!-- END THIS PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->

    <!-- END SCRIPTS -->
    </body>
</html>
<?php

}
else
{

  header('location:login.php');


}

?>
