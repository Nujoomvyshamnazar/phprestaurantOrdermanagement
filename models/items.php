

<!-- Add New -->


<div class="modal fade" id="edit<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Edit Item</h4></center>

</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="items/edit.php?id=<?= $row['id']; ?>" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-2">
<label class="control-label" style="position:relative; top:7px;">Item Name:</label>
</div>
<div class="col-lg-10">
<input type="text" class="form-control" name="itemname" required>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-2">
<label class="control-label" style="position:relative; top:7px;">Item Code:</label>
</div>
<div class="col-lg-10">
<input type="text" class="form-control" name="itemcode" required>

</div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-2">
<label class="control-label" style="position:relative; top:7px;">Item Price:</label>
</div>
<div class="col-lg-10">
<input type="text" class="form-control" name="itemprice" required>

</div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-2">
<label class="control-label" style="position:relative; top:7px;">Item Image:</label>
</div>
<div class="col-md-10">
<a class="file-input-wrapper btn btn-default  fileinput"><input type="file" class="fileinput" name="itemimg" id="itemimg" style="left: -151.234px; top: 2px;"></a>
  </div>
</div>



</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="btn_save_updates" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
</form>
</div>

</div>
</div>
</div>
