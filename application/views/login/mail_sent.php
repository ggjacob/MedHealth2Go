<!-- Main Content -->
<div id='content' role='main'><br />
    <div class="row">
        <div class="span6 offset3">
            <?php if(isset($message)) { ?>
                <div class="alert   <?php if(isset($success))echo 'alert-success '; else echo 'alert-danger' ;?> alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>
                        <?php
                        echo $message;
                        ?>
                    </strong>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- End of the Main content-->
</div>