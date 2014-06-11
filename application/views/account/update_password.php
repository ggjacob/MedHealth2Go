<?php
$userdata=$this->session->all_userdata();
?>
<div id="content" role="main">
    <section class="section section-alt section-padded">
        <div class="container-fluid">
            <div class="section-header">
                <h1>
                    User
                    <small class="light">Setting</small>
                </h1>
            </div>

            <div class="row-fluid">
                <div class="span10 offset1 well">
                    <div id="success-div" class="alert <?php if($hide) echo "hide" ;?>  <?php if($success==true){ ?> alert-success <?php }else if($success==false) { ?> alert-error <?php }?>alert-dismissable">
                        <button class="close" data-dismiss="alert" type="button">×</button>
                        <div id="success-msg">
                            
                            <?php
                                if($success)
                                    echo "Password changed successfully";
								else
								{
								?>
									<h4>Invalid Entries</h4>
									<ul>
									<?php echo validation_errors('<h4 class="error">', '</h4>');?>
									</ul>
								<?php 
								}
                            ?>
                        </div>
                    </div>
                    <form action="<?php echo base_url();?>account/UpdatePassword/<?php echo $userdata['user_id'] ;?>" method="post">

                        <div class="control-group">

                            <label class="span3 control-label" for="cpassword">Current Password: </label>
                            <div class="span8 form-control">
                                <input type="password" name="currentPassword" class="form-control" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="span3 control-label" for="duration">New Password: </label>
                            <div class="span8 form-control">
                                <input type="password" name="newPassword" class="form-control" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="span3 control-label" for="duration">Confirm Password</label>
                            <div class="span8 form-control">
                                <input type="password" name="confirmPassword" class="form-control" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="offset3 form-control">
                                <input class=" btn btn-primary" value="Update" name="submit" type="submit">
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>

</div>
</div>