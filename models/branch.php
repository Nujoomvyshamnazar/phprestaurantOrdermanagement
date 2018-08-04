


<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['branch_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Branch</h4></center>
                </div>
                <div class="modal-body">
				<?php

				?>
				<div class="container-fluid">
					<h5><center>Branchname: <strong><?php echo $row['branch_name']; ?></strong></center></h5>
                </div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="branch/delete.php?id=<?php echo $row['branch_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>

            </div>
        </div>
    </div>
<!-- /.modal -->



<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['branch_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Branch</h4></center>
                </div>
                <div class="modal-body">
								<div class="container-fluid">

						<form method="POST" action="branch/edit.php?id=<?php echo $row['branch_id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;"> Branch Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="branchname" value="<?= $row['branch_name']; ?>" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Branch Code:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="code" value="<?= $row['branch_code']; ?>" required>
						</div>
					</div>

                    			<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Branch Location:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="location" value="<?= $row['branch_location']; ?>" required>
						</div>
					</div>

                    	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Branch Address:</label>
						</div>
						<div class="col-lg-10">

              <textarea class="form-control" rows="5" name="address" value="<?= $row['branch_address']; ?>"><?= $row['branch_address']; ?></textarea>
						</div>
					</div>



                </div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form></div>
				</div>


            </div>
        </div>
    </div>
<!-- /.modal -->
