<script type="text/javascript">
    $(document).ready(function(){
        $('form#newAppointment').submit(function(event) {
           $('.success').empty();

            var postForm = { //Fetch form data
                'provider'  :$('select[name="provider"] option:selected').val(),
                'patient'   :$('select[name="patient"] option:selected').val(),
                'duration'  :$('select[name="duration"] option:selected').val(),
                'datetime'  :$('input[name=datetime]').val()
            };

            var doctor=$('select[name="provider"] option:selected').val();
            var patient=$('select[name="patient"] option:selected').val();
            var duration=$('select[name="duration"] option:selected').val();

            if(doctor==-1)
            {
                $('#success-div').removeClass( "alert-success" ).addClass( "alert-error" );
                $("#success-msg").text("Select a doctor");
                $("#success-div").show();
            }
            else if(patient==-1)
            {
                $('#success-div').removeClass( "alert-success" ).addClass( "alert-error" );
                $("#success-msg").text("Select a patient");
                $("#success-div").show();
            }
            else if(duration==-1)
            {
                $('#success-div').removeClass( "alert-success" ).addClass( "alert-error" );
                $("#success-msg").text("Select a duration");
                $("#success-div").show();
            }
            else
            {
                $.ajax({
                    type        : 'POST',
                    url         : '<?php echo base_url();?>appointment/add',
                    data        : postForm,
                    dataType    : 'json',
                    success     : function(data) {
                        if (data.success) {
                            $('#success-div').removeClass( "alert-error" ).addClass( "alert-success" );
                            //$('.success').html(data.message);

                            $("#success-msg").text(data.message);
                            $("#success-div").show();
                            //alert(data.message);

                        } else {
                            $('#success-div').removeClass( "alert-success" ).addClass( "alert-error" );
                            //$('.success').html(data.message);

                            $("#success-msg").text(data.message);
                            $("#success-div").show();
                        }

                        $("#myModal").modal("hide");
                    }
                });
            }

            event.preventDefault();
        });
    });
</script>
<?php
$userdata=$this->session->all_userdata();
?>

<!-- Main Content -->
<div id="content" role="main">
    <section class="section section-alt section-padded">
        <div class="container-fluid">
            <div class="section-header">
                <h1>
                    Appointment
                    <small class="light">Manager</small>
                </h1>
            </div>
            <div class="row-fluid">
                <div class="span10 offset1 well">
                    <div id="success-div" class="alert alert-success hide alert-dismissable">
                        <!--button class="close" data-dismiss="alert" type="button">×</button-->
                        <div id="success-msg">:</div>
                    </div>
                <?php if($userdata['role_id']!=2){?>
                    <button data-toggle="modal" data-target="#myModal" class="btn btn-small btn-primary"><i class="icon-plus icon-white"></i></button>
                    <button data-toggle="modal" data-target="#importModal" class="btn btn-small btn-primary">Import</button>
                    <?php } ?>
                    <table id="apptTable" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Provider</th>
                            <th>Patient</th>
                            <th>Start Date/Time</th>
                            <th>Duration (min)</th>
                            <th>Status</th>
                            <th>Delete</th>
                        </tr>
                        </thead>


                        <tbody>
                        <?php foreach($Appointments as $appointment) {?>
                            <?php if($userdata['role_id']==1) {?>
                                <?php if($userdata['user_id']==$appointment['did']) {?>
                                    <tr class="error danger">
                                        <td><?php echo $appointment['dlast_name'].", ".$appointment['dfirst_name'] ;?></td>
                                        <td><?php echo $appointment['plast_name'].", ".$appointment['pfirst_name'] ;?></td>

                                        <td><?php echo $appointment['start_date_time'] ;?></td>
                                        <td><?php echo $appointment['duration'] ;?>
                                        </td><td><?php echo $appointment['status'] ;?></td>
                                        <td>
                                            <input type="hidden" value="delete" name="action">
                                            <input type="hidden" value="41d292da46a11046ee6666f44ee5209d5327717d07bf15.61374591" name="meetingId">
                                            <button class="btn btn-danger"><i class="icon-trash icon-white"></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                            <?php if($userdata['role_id']==2) {?>
                                <?php if($userdata['user_id']==$appointment['pid']) {?>
                                    <tr class="error danger">
                                        <td><?php echo $appointment['dlast_name'].", ".$appointment['dfirst_name'] ;?></td>
                                        <td><?php echo $appointment['plast_name'].", ".$appointment['pfirst_name'] ;?></td>

                                        <td><?php echo $appointment['start_date_time'] ;?></td>
                                        <td><?php echo $appointment['duration'] ;?>
                                        </td><td><?php echo $appointment['status'] ;?></td>
                                        <td>
                                            <input type="hidden" value="delete" name="action">
                                            <input type="hidden" value="41d292da46a11046ee6666f44ee5209d5327717d07bf15.61374591" name="meetingId">
                                            <button class="btn btn-danger"><i class="icon-trash icon-white"></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>
                <div class="span10 offset1">
                    <div class="pagination">
                        <?php // echo $this->pagination->create_links(); ?>
                    </div>

                </div>
                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Add Appointment</h3>
                    </div>

                    <form id="newAppointment" name="newAppointment" action="/appointments-view.php" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input name="action" value="newAppt" type="hidden">
                            <?php if($userdata['role_id']==1){?>

                                <select name="provider" class="span12" disabled>
                                    <?php foreach($Providers as $provider) {?>
                                        <option value="<?php echo $provider['user_id']  ?>" <?php  if($userdata['user_id']==$provider['user_id']) echo "selected";?>>
                                            <?php echo $provider['last_name'].", ".$provider['first_name'] ;?>
                                        </option>
                                    <?php } ?>
                                </select>

                                <?php } else {?>

                                    <select name="provider" class="span12">
                                        <option value="-1" disabled="disabled" selected="selected"> --Select Provider-- </option>
                                        <?php foreach($Providers as $provider) {?>
                                            <option value="<?php echo $provider['user_id'] ?>"><?php echo $provider['last_name'].", ".$provider['first_name'] ;?></option>
                                        <?php } ?>
                                    </select>
                                <?php } ?>


                                <select name="patient" class="span12">
                                    <option value="-1" disabled="disabled" selected="selected"> --Select Patient-- </option>
                                    <?php foreach($Patients as $patient) {?>
                                        <option value="<?php echo $patient['user_id'] ?>"><?php echo $patient['last_name'].", ".$patient['first_name'] ;?></option>
                                    <?php } ?>
                                </select>


                                <select name="duration" class="span12">
                                    <option value="-1" disabled="disabled" selected="selected"> --Select Duration-- </option>
                                    <option value="15">15 minutes</option>
                                    <option value="30">30 minutes</option>
                                    <option value="60">60 minutes</option>
                                </select>

                            <div class="control-group">
                                <div class="controls input-append date form_datetime" data-date="2014-04-19T12:00:00Z" data-date-format="yyyy-mm-dd HH:ii:ss" data-link-field="date_time">
                                    <input name="datetime" size="16" readonly="readonly" placeholder="Select Date/Time" type="text">
                                    <span class="add-on"><i class="icon-remove"></i></span>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                                <input name="date_time" id="date_time" value="" type="hidden"><br>
                            </div>
                            <!--div class="control-group">
                                <div class="success alert-success">

                                </div>

                            </div-->
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary" value="Submit" type="submit">

                        </div>
                    </form>
                </div>
                <div id="importModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="importModalLabel">Import Appointments</h3>
                    </div>
                    <div class="modal-body">

                        <form name="import" action="/appointments-view.php" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input name="action" value="import" type="hidden">
                            <br>
                            <input name="csv" id="csv" accept=".csv" type="file">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary btn-block" value="Submit" type="submit">
                    </div>
                </div>
            </div>
        </div>

</div>
</div>
