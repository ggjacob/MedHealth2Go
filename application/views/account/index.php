<?php
$userdata=$this->session->all_userdata();
?>
<!-- Main Content -->
<div id="content" role="main">
    <section class="section section-alt section-padded">
        <div class="container-fluser_id">
            <div class="row-fluser_id">
                <div class="section-header">
                    <h1>
                        User
                        <small class="light">Manager</small>
                    </h1>
                </div>
                <div class="row-fluser_id">
                    <div class="span10 offset1 well">

                        <div id="success-div" class="alert alert-success hide alert-dismissable">
                            <button class="close" data-dismiss="alert" type="button">×</button>
                            <h4 id="success-msg">:</h4>
                        </div>
                        <button id="addButton" class="btn btn-small btn-primary"><i class="icon-plus icon-white"></i></button>

                        <table id="apptTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>User</th>
                                <th>Role</th>
                                <th>Appointments</th>
                                <th>Add/Remove</th>
                            </tr>
                            </thead>


                            <tbody>
                            <?php foreach($users as $user) { ?>

                            <tr data-user="<?php echo $user['user_id'] ;?>">
                                <td><a class="viewuserlink" data-user="<?php echo $user['user_id'] ; ?>" href="#"><?php echo $user['first_name'] ; ?></a></td>
                                <td class="title"><?php echo $user['role_name'] ; ?></td>
                                <td>
                                    <?php if($user['role_id']==1||$user['role_id']==2) {?>
                                        <a target="_blank" href="<?php echo base_url()?>appointment/user/?role_id=<?php echo $user['role_id'];?>&user_id=<?php echo $user['user_id'];?>"><button type="button" class="btn btn-info">View</button></a>
                                    <?php } ?>
                                </td>
                                <?php if($user['active']==1){?>
                                    <td>
                                        <button class="btn btn-danger deladdbutton" status='1' data-user="<?php echo $user['user_id'] ; ?>">
                                            <i class="icon-check icon-white"></i></button>
                                    </td>
                                <?php } else {?>
                                    <td>
                                        <button class="btn btn-danger  deladdbutton" status='0' data-user="<?php echo $user['user_id'] ; ?>">
                                            <i class="icon-trash icon-white"></i></button>
                                    </td>
                                <?php } ?>
                            </tr>

                            <?php } ?>

                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="span10 offset2">
                    <div class="pagination">
                        <?php // echo $this->pagination->create_links(); ?>
                    </div>

                </div>
                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Add User</h3>
                    </div>
                    <div class="modal-body large">
                        <form action="users_ctrl" method="post" accept-charset="UTF-8">
                            <input name="action" value="create" type="hidden">
                            <input name="user_id" value="" type="hidden">
                            <input class="span5" name="first_name" placeholder="first name" type="text" maxlength="32" pattern="[A-Za-z ]+" required>

                            <input class="span5" name="last_name" placeholder="last name" type="text" maxlength="32" pattern="[A-Za-z ]+" required>

                            <input class="span5" name="dob" placeholder="DOB (mm/dd/yyyy)" maxlength="10" type="date" pattern="[0-2]{2}\/[0-3]{2}\/[0-9]{4}">

                            <input class="span5" name="record_num" placeholder="Record Number" maxlength="32" pattern="[a-zA-Z0-9 ]+" type="text">

                            <input class="span5" name="email" placeholder="email" type="email" required>

                            <input class="span5" name="phone" placeholder="phone number : (123) 456 - 7890" pattern="^(\(\d{3}\)|\d{3})([ -])\d{3}([ -])\d{4}$" type="text">
                            <label class="checkbox" id="changePasswdLbl">
                                <input id="changePasswd" name="changePasswd" value="1" type="checkbox"> Update Password?
                            </label>

                            <input class="span5" name="password" placeholder="password" disabled="disabled" pattern=".{8,}" type="password" required>

                            <input class="span5" name="passwordc" placeholder="confirm password" disabled="disabled" pattern=".{8,}" type="password" required>

                            <label class="radio inline">
                                <input name="role" id="roleoption2" value="1" type="radio">
                                Provider
                            </label>
                            <label class="radio inline">
                                <input name="role" id="roleoption1" value="2" checked="checked" type="radio">
                                Patient
                            </label>
                            <label class="radio inline">
                                <input name="role" id="roleoption3" value="3" type="radio">
                                Scheduler
                            </label>

                            <label class="checkbox">
                                <input name="acceptMsg" value="1" type="checkbox"> Accept text messages
                            </label>
                            <label class="checkbox">
                                <input name="active" value="1" checked="checked" type="checkbox"> Active
                            </label>
                            <div class="modal-footer">
                                <input class="btn btn-primary btn-block" value="Submit" type="submit">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="errorModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <h4 class="modal-title" id="myModalLabel">Validation Errors</h4>
                            </div>
                            <div class="modal-body errorModal">
                                ...
                            </div>

                        </div>
                    </div>
                </div> </div>
        </div>
    </section>
</div>
</div>
<script>
    $(".deladdbutton").on('click',function() {
        var status=$(this).attr('status');
        if(status==1)
        {
            if( confirm('Are you sure you want to Remove this user?') ) {
                $.post( "<?php echo base_url(); ?>account/Activity", { action: "remove", user: $(this).data("user") }, function( data ) {
                    //$('.delbutton[data-user="'+data.id+'"]').closest('tr').remove();
                    $('.deladdbutton[data-user="'+data.user_id+'"]').html('<i class="icon-trash icon-white"></i>')
                    $("#success-div").removeClass('hide')
                    $("#success-msg").text("User successfully deactivated.");
                },"json");
            }
            $(this).attr('status','0');
        }
        else
        {
            if( confirm('Are you sure you want to Active this user?') ) {
                $.post( "<?php echo base_url(); ?>account/Activity", { action: "active", user: $(this).data("user") }, function( data ) {
                    //$('.delbutton[data-user="'+data.id+'"]').closest('tr').remove();
                    $('.deladdbutton[data-user="'+data.user_id+'"]').html('<i class="icon-check icon-white"></i>')
                    $("#success-div").removeClass('hide')
                    $("#success-msg").text("User successfully activated.");

                },"json");
            }
            $(this).attr('status','1');
        }

    });

    $("#myModal form").submit(function(e) {
        e.preventDefault();
        $.post("<?php echo base_url();?>account/SaveUser/", $("#myModal form").serialize(), function( data ) {

            if( data.errors && data.errors.length > 0 )
            {
                //alert(data.errors);
                $('.errorModal').html(data.errors);
                $('#errorModel').modal('show');
            }
            else
            {
                if($("input[name='action']").val() == 'create')
                {
                    $("#success-msg").text("User successfully created.");
                    $("#success-div").show();
                    var newRow = "<tr>" +
                        "<td><a class='viewuserlink' data-user='"+data.user_id+"' href='#'>"+data.user.first_name +" "+data.user.last_name+"</a></td>" +
                        "<td>"+data.user.role_name+"</td>";
                    if( data.user.role_id != '3' ||data.user.role_id != '4' )
                    {
                        newRow+= "<td><a href='appointments-view?id="+data.user.user_id+"&role="+data.user.role_name+"'><button type='button' class='btn btn-info'>View</button></a></td>";
                    }
                    else {
                        newRow+= "<td></td>";
                    }
                    newRow+= "<td><button class='btn btn-danger delbutton' data-user="+data.user.user_id+">"+
                        "<i class='icon-trash icon-white'></i></button>"+
                        "</td>"+
                        "</tr>";
                    $('#apptTable > tbody > tr:last').after(newRow);

                    //$("#myModal").modal("hide");
                }
                else {
                    $("#success-msg").text("User updated.");
                    $("#success-div").show();
                    $("a[data-user='"+data.user.user_id+"']").text(data.user.first_name + " " + data.user.last_name );
                    $("tr[data-user='"+data.user.user_id+"'] td[class='title'] ").text(data.user.role_name);

                }

                $("#myModal").modal("hide");
            }
            //$("#myModal").modal("hide");
        },"json");



    });

    $(".viewuserlink").click(function(e) {
        e.preventDefault();
        $.get( "<?php echo base_url();?>account/GetUser/", { user : $(this).data("user") },  function( data ) {

            var user = data.user;

            var dates=user.dob.split('-');


            $("input[name='user_id']").val(user.user_id);
            $("input[name='action']").val('update');
            $("input[name='first_name']").val(user.first_name);
            $("input[name='last_name']").val(user.last_name);
            $("input[name='email']").val(user.email);
            $("input[name='phone']").val(user.phone);
            $("input[name='dob']").val(dates[1]+"/"+dates[2]+"/"+dates[0]);
            $("input[name='record_num']").val(user.record_num);
            $("#changePasswdLbl").show();
            $("#changePasswd").prop('checked',false);
            $("input[name='password']").prop('disabled',true);
            $("input[name='passwordc']").prop('disabled',true);
            if( user.acceptMsg == 1 ) {
                $("input[name='acceptMsg']").prop('checked',true);
            }
            else{
                $("input[name='acceptMsg']").prop('checked',false);
            }
            if( user.active == 1 ) {
                $("input[name='active']").prop('checked',true);
            }
            else{
                $("input[name='active']").prop('checked',false);
            }
            if( user.role == 1 )
            {
                $("#roleoption2").prop('checked', true);
            }
            else if ( user.role == 2 )
            {
                $("#roleoption1").prop('checked', true);
            }
            else
            {
                $("#roleoption3").prop('checked', true);
            }
            $("#myModalLabel").text("Edit User");
            $("#myModal").modal("show");

        }, "json" );

    });

    $("#addButton").click(function(e) {
        e.preventDefault();
        $("input[name='action']").val('create');
        $("#myModalLabel").text("Add User");
        $("input[name='first_name']").val("");
        $("input[name='last_name']").val("");
        $("input[name='email']").val("");
        $("input[name='dob']").val("");
        $("input[name='record_num']").val("");
        $("input[name='phone']").val("");
        $("input[name='acceptMsg']").prop('checked',false);
        $("input[name='active']").prop('checked',true);
        $("#roleoption1").prop('checked', true);
        $("input[name='password']").prop('disabled',false).val("");
        $("input[name='passwordc']").prop('disabled',false).val("");
        $("#changePasswdLbl").hide();
        $("#myModal").modal("show");
    });

    $("#changePasswd").click(function(e) {

        if( $(this).prop('checked') == true )
        {
            $("input[name='password']").prop('disabled',false);
            $("input[name='passwordc']").prop('disabled',false);
        }
        else {
            $("input[name='password']").prop('disabled',true);
            $("input[name='passwordc']").prop('disabled',true);
        }
    });

</script>
