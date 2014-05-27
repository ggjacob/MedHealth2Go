<!-- Start: MAIN CONTENT -->
<?php
session_start();
$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $_SERVER['REQUEST_URI_PATH']);
//print_r($segments[4]);
$page=$segments[4];
if($page=="")
    $page=0;

$loggedUserData=$this->session->all_userdata();
$loggedUser=$loggedUserData['email'];

?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="offset2 col-lg-8">
                <div class="well well-sm">
                    <table class="table table-striped table-responsive" width="647">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Update</th>
                            <th>Block</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  foreach($users as $user){?>
                        <tr>
                            <td><?php echo $user['user_id'];?></td>
                            <td>
                                <a href="<?php echo base_url()?>admin/Edit/<?php echo $user['user_id']?>"> <?php echo $user['first_name']." ".$user['last_name'];?> </a>
                            </td>
                            <td><?php echo $user['role_name'];?></td>
                            <td>
                                <?php if($user['role_id']!=1) {?>
                                    <a href="<?php echo base_url()?>admin/Edit/<?php echo $user['user_id']?>"> Edit </a>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($user['role_id']!=1) {?>
                                    <?php if($user['is_active']==1){?>
                                        <a href="<?php echo base_url()?>admin/MakeInactiveUser/<?php echo $page."/".$user['user_id']?>"> Block</a>
                                    <?php }
                                    else {?>
                                        <a href="<?php echo base_url()?>admin/MakeActiveUser/<?php echo $page."/".$user['user_id']?>"> Unlock</a>
                                    <?php } ?>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?php  echo $this->pagination->create_links(); ?>

            </div>
        </div>
    </div>
</div>
    <!-- End: MAIN CONTENT -->
