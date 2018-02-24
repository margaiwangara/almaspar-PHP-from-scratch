<?php

if(session_status() == PHP_SESSION_NONE)
    //start session
    session_start();

//include login page
include_once __DIR__.'/../../auth/back-end/reset-pass.php';

if($get_mes)
    header("Location:/../almas-parlour/admin/auth/view/login-view.php");

include_once __DIR__.'/../back-end/reset-final.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap files start here-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Bootstrap ends here-->
    <!--Custom styles start here-->
    <link rel="stylesheet" href="/../almas-parlour/admin/styles/account-init.css">
</head>
<title>Alma's Parlour - Password Reset</title>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3"></div>
                <div class="col-md-5">
                    <div class="panel panel-default login-body">
                        <div class="panel-body">
                            <div class="login-brand">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1">
                                            <img src="/../almas-parlour/images/logo.png" alt="almas-logo">
                                        </div>
                                        <div class="col-md-9">
                                            <strong><a href="#"> alma's parlour</a></strong>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']."?rid=".$uid."&ra=".$pconfirm_code);?>" method="post" id="login-form" autocomplete="off">
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
            </div>
        </div>
    </div>
</body>
</html>