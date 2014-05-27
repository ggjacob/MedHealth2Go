<!-- Main Content -->
    <div id="content" role="main">
        <br>
        <section class="section section-alt section-padded">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>
                        Login
                    </h1>
                </div>
                <div class="row-fluid">
                    <div class="span4"></div>
                    <div class="span4">
                        <?php if($message!='false') { ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <h4>Invalid Entries</h4>
                                    <ul>

                                    <?php
                                    if(isset($error_message))
                                        echo "<h4>".$error_message."</h4>";
                                     echo validation_errors('<h4 class="error">', '</h4>');
                                    ?>

                                    </ul>

                            </div>
                        <?php } ?>
                        <form method="post"  action="<?php echo base_url()?>login/" class="" autocomplete="off" accept-charset="UTF-8">
                            <input id="urlB" name="urlB" value="login" type="hidden">
                            <input type="hidden" name="post" value="false"/>
                            <input id="username" class="span12" name="username" placeholder="Email" type="text">
                            <br>
                            <input id="password" class="span12" name="password" placeholder="Password" type="password">
                            <input class="btn btn-primary btn-block" value="Submit" type="submit">
                        </form>
                        <a href="<?php echo base_url() ;?>login/RequestPassword/">Forgot password?</a>
                    </div>
                    <div class="span4"></div>
                </div>
            </div>
        </section>
    </div>
<!-- End of  Main Content -->
</div>
