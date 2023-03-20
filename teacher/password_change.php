<form method="post" action="change_modal.php">
    <!-- User modal to change password -->
    <div id="modify" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3>Modify Admin Profile  </h3>
                </div>

                <div class="modal-body">
                    <div class="col-md-9">
                        <div class="form-group">
                            <?php
                            include '../dbconfig.php';
                            $sql = mysql_query("SELECT * FROM administrator");
                            $row = mysql_fetch_array($sql);
                            ?>
                            <label>Your new username</label>
                            <input type="text" name="pseudo" class="form-control" value="<?php echo $row[1]; ?>">
                        </div>

                        <div class="form-group">
                            <label>Your actual password</label>
                            <input type="text" name="actual" title="Your actual password" class="form-control" value="<?php echo $row[2]; ?>">
                        </div>

                        <div class="form-group">
                            <label>Your new password</label>
                            <input type="text" name="newMdp" title="Your new password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Confirm Your Password</label>
                            <input type="text" name="cMdp" title="Confirm your new password" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove"></i> Close</button>
                                <button name="change_password" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>