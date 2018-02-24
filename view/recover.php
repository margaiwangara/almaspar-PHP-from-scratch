<?php
//recovery file
include_once __DIR__."/../behind-scenes/recover-pass.php";

//include master file
include_once __DIR__."/../include/accountinit.master.php";


?>

<title>Alma's Parlour - Password Reset</title>
<div class="container" id="wrapper">
    <?php

        //add navbar
        include_once __DIR__."/../include/navbar.inc.php";
    ?>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title"><span class="text"><strong>YOUR</strong> EMAIL</span></h4>
                <div class="col-md-5">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" name="resetpass_email" id="resetpass_email_id" placeholder="me@example.com" value="<?php if(isset($_POST['resetpass_email'])) echo $_POST['resetpass_email'];?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="reset_email_submit" id="reset_email_btn">
                                Reset Password
                            </button>
                        </div>
                        <?php if($recover_pass_mess):?>
                            <div class="alert alert-info alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <span class="error-display"><strong><?php echo $recover_pass_mess;?></strong></span>
                            </div>
                        <?php endif;?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<?php

//include footer
include_once __DIR__."/../include/footer-page.inc.php";
?>
