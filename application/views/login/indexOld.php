 <!-- Start: MAIN CONTENT -->
 <div class="content">
     <div class="container">
         <div class="page-header">
             <h1>Welcome to Our Patient Management System</h1>
         </div>
         <?php if(isset($error)) { ?>
             <div class="alert alert-danger alert-dismissable">
                 <button type="button" class="close" data-dismiss="alert">×</button>
                 <strong>
                     <?php
                         if(isset($error_message))
                             echo $error_message;
                         echo validation_errors();
                     ?>
                 </strong>
             </div>
         <?php } ?>
         <div class="row">
             <div class="offset3 col-lg-6">
                 <h4 class="widget-header"><i class="icon-lock"></i> Sign in to Patient Management System</h4>
                 <div class="widget-body">
                     <div class="center-align">
                         <div class="well well-sm">
                             <form method="post"  action="<?php echo base_url()?>login/Check/" class="form-horizontal form-signin-signup" autocomplete="off">

                                 <fieldset>

                                     <!-- Name input-->
                                     <div class="form-group">
                                         <label class="col-md-3 control-label" for="name">Username</label>
                                         <div class="col-md-9">
                                             <input id="username" name="username" type="text" placeholder="Email" class="form-control">
                                         </div>
                                     </div>

                                     <!-- Email input-->
                                     <div class="form-group">
                                         <label class="col-md-3 control-label" for="email">Password</label>
                                         <div class="col-md-9">
                                             <input id="password" name="password" type="password" placeholder="Your email" class="form-control">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <div class="col-md-4 offset1">
                                             <input type="checkbox"> Remember me
                                         </div>

                                         <div class="col-md-4">
                                             <a href="<?php echo base_url() ;?>login/ForgotPassword/">Forgot password?</a>
                                         </div>
                                         <div class="clearfix"></div>
                                     </div>
                                     <input type="submit" value="Signin" class="btn btn-primary btn-lg">
                                     </fieldset>
                                 </form>
                             </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End: MAIN CONTENT -->
