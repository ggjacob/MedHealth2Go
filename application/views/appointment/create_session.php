<?php
$userdata=$this->session->all_userdata();
?>
<div id="content" role="main">
    <section class="section section-alt section-padded">
        <div class="container-fluid">
            <div class="section-header">
                <h1>
                    Create
                    <small class="light">Sessions</small>
                </h1>
            </div>
            <?php //echo validation_errors() ;?>
            <div class="row-fluid">
                <div class="span10 offset1 well">
                    <div id="success-div" class="alert alert-success hide alert-dismissable">
                        <button class="close" data-dismiss="alert" type="button">×</button>
                        <div id="success-msg">:</div>
                    </div>
                    <form action="<?php echo base_url();?>appointment/create_session" method="post">

                        <div class="control-group">

                            <label class="span2 control-label" for="patient">Examinee : </label>
                            <div class="span10 form-control">
                                <select name="patient">
                                    <?php foreach($Patients as $patient) {?>
                                        <option value="<?php echo $patient['user_id'] ?>"><?php echo $patient['last_name'].", ".$patient['first_name'] ;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="span2 control-label" for="duration">Duration : </label>
                            <div class="span10 form-control">
                                <select name="duration">
                                    <option value="15">15 minutes</option>
                                    <option value="30">30 minutes</option>
                                    <option value="60">60 minutes</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="offset2 form-control">
                                <input class=" btn btn-primary" value="Launch" type="submit">
                                <input type="hidden" name="provider" value="<?php echo $userdata['user_id'] ;?>">
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>

</div>
</div>