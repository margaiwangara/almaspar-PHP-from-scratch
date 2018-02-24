<?php
//recovery file
include_once __DIR__."/../behind-scenes/reset-pass.php";

if($get_mes)
{
    header("Location: /../almas-parlour/expired-recovery.html");
}

//include master file
include_once __DIR__."/../include/accountinit.master.php";



//include reset pass
include_once __DIR__."/../behind-scenes/reset-final.php";
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
                <h4 class="title"><span class="text"><strong>RESET</strong> PASSWORD</span></h4>
                <div class="col-md-5">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']."?rid=".$uid."&ra=".$pconfirm_code);?>" method="post" autocomplete="off">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="recover_pass" id="recover_pass" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm-pass">Confirm Password</label>
                            <input type="password" class="form-control" name="recover_cpass" id="recover_cpass" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" name="recover_submit" id="recover_submit">
                                Reset Password
                            </button>
                        </div>
                        <?php if($recfinal_message):?>
                            <div class="alert alert-info alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <span class="error-display"><strong><?php  echo $recfinal_message;?></strong></span>
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
