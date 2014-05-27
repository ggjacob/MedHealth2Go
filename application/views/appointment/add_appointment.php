<!-- Start: MAIN CONTENT -->
<div class="content">
    <div class="container">
        <div class="row">
            <?php if($message!='false') { ?>
                <div class="alert   <?php if(isset($success))echo 'alert-success '; else echo 'alert-danger' ;?> alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">Ã—</button>
                    <strong>
                        <?php
                        //if($message="validate_error")
                        echo validation_errors();
                        //else
                        echo $message;
                        ?>
                    </strong>
                </div>
            <?php } ?>

            <div class="offset2 col-lg-8">
                <div class="well well-sm">
                    <form class="form-horizontal" action="<?php echo base_url()?>appointment/add/" method="post">
                        <fieldset>
                            <legend class="text-left">Add Appointment</legend>

                            <div class="form-group">
                                <div class="offset1 col-lg-8">
                                    <select name="provider" class="form-control">
                                        <option value="0" selected>--Select Provider--</option>
                                        <?php foreach($Providers as $provider) {?>
                                            <option value="<?php echo $provider['user_id'] ?>"><?php echo $provider['last_name'].", ".$provider['first_name'] ;?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="offset1 col-lg-8">
                                    <select name="patient" class="form-control">
                                        <option value="0" selected>--Select Patient--</option>
                                        <?php foreach($Patients as $patient) {?>
                                            <option value="<?php echo $patient['user_id'] ?>"><?php echo $patient['last_name'].", ".$patient['first_name'] ;?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>



                            <div class="form-group">
                                <div class="offset1 col-lg-8">
                                    <select name="duration" class="form-control">
                                        <option value="0" selected>--Select Duration--</option>
                                        <option value="15" selected>15 minutes</option>
                                        <option value="30" selected>30 minutes</option>
                                        <option value="60" selected>60 minutes</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="offset1 col-lg-4">
                                    <input id="datetime" name="datetime" type="text" value="<?php echo set_value('datetime'); ?>" placeholder="Select Date/Time" class="form-control" >
                                </div>

                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="offset1 col-md-7 text-left">
                                    <input type="hidden" name="post" value="false"/>
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
