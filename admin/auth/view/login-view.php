<?php

if(session_status() == PHP_SESSION_NONE)
    //start session
    session_start();

//include login page
include_once __DIR__.'/../../auth/back-end/admin-signin.php';

if(isset($_SESSION['ADMIN_ID']))
    header("Location:/../almas-parlour/admin/index.php");
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
    <link rel="stylesheet" href="/../admin/styles/account-init.css">
</head>
<title>Alma's Parlour - Admin Log In</title>
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
                                            <img src="/../images/logo.png" alt="almas-logo">
                                        </div>
                                        <div class="col-md-9">
                                            <strong><a href="#"> alma's parlour</a></strong>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="login-form" autocomplete="off">
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                    <input type="email" name="access-email" id="access-email" placeholder="admin@me.com" class="form-control" value="<?php if(isset($_POST['access-email'])) echo $_POST['access-email'];?>">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input type="password" name="access-password" id="access-password" placeholder="Password" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="checkbox pull-left">
                                            <label><input type="checkbox" name="access-remember" id="access-remember">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group pull-right col-md-4" style="margin-right: -12px;margin-left: -12px;">
                                            <button type="submit" class="btn btn-primary" name="access-submit" id="access-submit">Access Account</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pull-right">
                                    <a href="/../view/recover.php"><button class="btn btn-default" type="button" name="forgot-password" id="forgot-password">
                                        <span class="fa fa-key"></span> Forgot Password?
                                    </button></a>
                                </div>
                            </form>
                        </div>
                        <?php if($login_message):?>
                        <div class="panel-footer">
                            <div class="alert alert-info alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <span class="error-display"><?php echo $login_message;?></span>
                            </div>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>