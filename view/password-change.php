<?php
//include password change file
include_once __DIR__."/../behind-scenes/password-change.php";

//include master file
include_once __DIR__."/../include/accountinit.master.php";



?>
<title>User Information - Change Password</title>
<div class="container" id="wrapper">
    <?php
        //include navbar
        include_once __DIR__."/../include/navbar.inc.php";
    ?>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title"><span class="text"><strong>USER</strong> INFORMATION</span></h4>
                <div class="col-md-3">
                    <?php
                    //include listitems
                    include_once __DIR__."/../include/user-info-sidebar.inc";
                    ?>
                </div>
                <div class="col-md-9">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Change Password</h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                                <div class="form-group">
                                    <input type="password" name="old_password" id="oldpwrd_id" class="form-control" placeholder="Old Password" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="new_password" id="newpwrd_id" class="form-control" placeholder="New Password" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="cnew_password" id="cnewpwrd_id" class="form-control" placeholder="Confirm New Password" required/>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="passchange_submit" id="passchange_id" class="btn btn-primary">
                                        Change Password
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p style="color: red;"><?php echo $change_pass_message;?></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

//include footer
include_once __DIR__.'/../include/footer-page.inc.php';
?>
