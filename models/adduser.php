<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="user/addnew.php">
<div class="row">
<div class="col-lg-2">
<label class="control-label" style="position:relative; top:7px;">Name:</label>
</div>
<div class="col-lg-10">
<input type="text" class="form-control" name="name" required>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-2">
<label class="control-label" style="position:relative; top:7px;">Email:</label>
</div>
<div class="col-lg-10">
<input type="email" class="form-control" name="email" required>

</div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-2">
<label class="control-label" style="position:relative; top:7px;">Password:</label>
</div>
<div class="col-lg-10">
<input type="text" class="form-control" name="password" required>
</div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-2">
<label class="control-label" style="position:relative; top:7px;">Repeat Password:</label>
</div>
<div class="col-lg-10">
<input type="text" class="form-control" name="password" required>
</div>
</div>


<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-2">
<label class="control-label" style="position:relative; top:7px;">User Type:</label>
</div>
<div class="col-lg-10">


<select class="form-control select" data-style="btn-success" name="userType">

<?php     include_once 'config/DBConnect.php';
$database = new dbConnect();

$db = $database->openConnection();


$drop = "select 	user_type_id,User_group_name from `user_type` where status=1";
$group = $db->query($drop); ?>

<?php     while ($row = $group->fetch()) {
?>
<option value="<?=  $row['user_type_id'] ?>"><?=  $row['User_group_name'] ?></option>


<?php } ?>
</select>

</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
</form>
</div>

</div>
</div>
</div>
