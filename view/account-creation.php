<?php

if(session_status() == PHP_SESSION_NONE)
    //session start
    session_start();

//include master file
include_once __DIR__."/../include/accountinit.master.php";

//link to create account
include_once __DIR__."/../behind-scenes/create-account.php";

//link to login account
include_once __DIR__."/../behind-scenes/user-login.php";


?>
<title>Alma's Parlour - User Registration</title>
<div class="container" id="wrapper">

    <?php

        //include navbar
        include_once __DIR__."/../include/navbar.inc.php";
    ?>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <h4 class="title"><span class="text"><strong>ACCESS</strong> ACCOUNT</span></h4>
                    <div class="col-md-10">
                        <form action="" method="post" id="login-form" autocomplete="off">
                            <div class="form-group">
                                <input type="email" name="login_email" class="form-control" id="login_email_id" placeholder="someone@example.com" value="<?php if(isset($_POST['login_email'])) echo $_POST['login_email'];?>" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="login_password" class="form-control" id="login_pass_id" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="login_submit" value="Access Account">
                                <span class="pull-right">
                                    <a href="recover.php">
                                        <button type="button" name="forgot_password" id="pass_recovery_id" class="btn btn-default">
                                            <i class="fa fa-key" style="font-size: 10px;"></i> Forgot Password?
                                        </button>
                                    </a>
                                </span>
                            </div>
                            <?php if($login_message):?>
                                <div class="alert alert-info alert-dismissible fade in">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <span class="error-display"><strong><?php echo $login_message;?></strong></span>
                                </div>
                            <?php endif;?>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="title"><span class="text"><strong>CREATE</strong> ACCOUNT</span></h4>
                    <div class="col-md-10">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="registration-form" autocomplete="off">
                            <div class="form-group">
                                <input type="email" name="register_email" class="form-control" id="register_email_id" placeholder="someone@example.com" value="<?php if(isset($_POST['register_email'])) echo $_POST['register_email'];?>" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="register_password" class="form-control" id="register_password_id" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="register_cpassword" class="form-control" id="register_cpassword_id" placeholder="Confirm Password" required>
                            </div>
                            <div class="check-box">
                                <label><input type="checkbox" value="1" name="terms_check" id="terms_check_id" <?php if(isset($_POST['terms_check'])){?>checked<?php }?>> I accept the <a href="terms-and-conditions.php" target="_blank">Terms And Conditions</a></label>
                            </div>
                            <div class="form-group">
                                <input type="submit"class="btn btn-primary" name="register_submit" value="Create Account">
                            </div>
                            <?php if($reg_message):?>
                            <div class="alert alert-info alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <span class="error-display"><strong><?php echo $reg_message;?></strong></span>
                            </div>
                            <?php endif;?>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <hr/>
    </div>
</div>
<?php

    //include footer
    include_once __DIR__."/../include/footer-page.inc.php";
?>