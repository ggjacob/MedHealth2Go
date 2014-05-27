<!-- Start: MAIN CONTENT -->
<div class="content">
    <div class="container">
        <div class="row">
            <?php if($message) { ?>
                <div class="alert   <?php if(isset($success))echo 'alert-success '; else echo 'alert-danger' ;?> alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>
                        <?php
                       if($message="validate_error")
                            echo validation_errors();
                        else
                            echo $message;
                        ?>
                    </strong>
                </div>
            <?php } ?>

            <div class="offset2 col-lg-8">
                <div class="well well-sm">
                    <form class="form-horizontal" action="<?php echo base_url()?>admin/CreateUser/" method="post">
                        <fieldset>
                            <legend class="text-left">Create New User</legend>

                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">First Name</label>
                                <div class="col-md-8">
                                    <input id="fname" name="fname" type="text" value="<?php echo set_value('fname'); ?>" placeholder="First Name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">Last Name</label>
                                <div class="col-md-8">
                                    <input id="lname" name="lname" type="text" value="<?php echo set_value('lname'); ?>" placeholder="Last Name" class="form-control">
                                </div>
                            </div>
                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="email">Email</label>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="text" value="<?php echo set_value('email'); ?>" placeholder="Email" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">Password</label>
                                <div class="col-md-8">
                                    <input id="password" name="password" type="test" value="<?php echo set_value('password'); ?>" placeholder="Password" class="form-control" autocomplete="off" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">Confirm Password</label>
                                <div class="col-md-8">
                                    <input id="cpassword" name="cpassword" type="test" value="<?php echo set_value('cpassword'); ?>" placeholder="Confirm Password" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">Role</label>
                                <div class="col-lg-8">
                                    <select name="role" class="form-control">
                                        <?php foreach($roles as $role) {?>
                                        <option value="<?php echo $role['role_id'] ?>"><?php echo $role['role_name'] ?></option>
                                       <?php } ?>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="gender">Gender</label>
                                <div class=" col-lg-8">
                                    <label >
                                        <input type="radio" name="gender" id="male" value="male" checked>
                                        Male
                                    </label>
                                    &nbsp;&nbsp;&nbsp;
                                    <label >
                                        <input type="radio" name="gender" id="female" value="female" >
                                        Female
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">Contact Number</label>
                                <div class="col-md-8">
                                    <input id="phone" name="phone" type="text" value="<?php echo set_value('phone'); ?>" placeholder="phone" class="form-control">
                                </div>
                            </div>
                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="message">Address</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="address" name="address"  value="<?php echo set_value('address'); ?>"placeholder="Address" rows="5"></textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="offset1 col-md-7 text-left">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- End: MAIN CONTENT -->
