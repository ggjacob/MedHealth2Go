<!-- Main Content -->
<div id='content' role='main'><br />
    <div class="row">
        <div class="span4 offset4 well">
            <legend>Password Reset</legend>

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

            <form method="POST" action='<?php echo base_url()?>login/RequestPassword/' accept-charset="UTF-8">
                <input type="text" id="email" class="span4" name="username" placeholder="Email">
                <input type="hidden" name="post" value="false"/>
                <input type="submit" class="btn btn-primary btn-block" value="Submit"/>
            </form>
        </div>
    </div>

</div>

</div>