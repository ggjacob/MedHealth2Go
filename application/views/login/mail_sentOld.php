<!-- Start: MAIN CONTENT -->
<div class="content">
    <div class="container">
        <div class="page-header">
            <h1>Welcome to Our Patient Management System</h1>
        </div>
        <div class="row">
            <div class="span6 offset3">
                <?php if(isset($message)) { ?>
                    <div class="alert   <?php if(isset($success))echo 'alert-success '; else echo 'alert-danger' ;?> alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>
                            <?php
                              echo $message;
                            ?>
                        </strong>
                    </div>
                <?php } ?>
                <!--div>
                    <form method="post"  action="<?php echo base_url()?>login/RequestPassword/" class="form-horizontal form-signin-signup" autocomplete="off">
                        <div class="form-group">
                            <input type="text" name="username"  value="" placeholder="Email" autocomplete="off" class="form-control">
                            <input type="submit" value="Send Request" class="btn btn-primary  btn-lg">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End: MAIN CONTENT -->
