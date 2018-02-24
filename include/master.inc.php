<?php
if(session_status() == PHP_SESSION_NONE)
    //initialize session
    session_start();

//variables to strore link data
$user_email = FALSE;

if(isset($_SESSION['USER_EMAIL']))
{
    $user_email = $_SESSION['USER_EMAIL'];
}

//include logo  display//
//include_once __DIR__.'/../admin/back-end/logo-update.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="almas parlour, almasparlour,almasparlour.co.ke">
    <meta name="author" content="Margai W.">

    <!--All CDNs and other page links go after here-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../almas-parlour/styles/master-style.css">
    <link rel="stylesheet" href="/../almas-parlour/styles/body-style.css">
    <link rel="stylesheet" href="/../almas-parlour/styles/added-styles.css">
    <link rel="stylesheet" href="/../almas-parlour/styles/snackbar-style.css">

    <!--icon goes here-->
    <link rel="shortcut icon" type="image/x-icon" href="/../almas-parlour/favicon.ico"/>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/../almas-parlour/js/collective_action.js" type="text/javascript"></script>
    <script src="/../almas-parlour/js/index-slides.js" type="text/javascript"></script>

    <!--product handler javascript-->
    <script src="/../almas-parlour/js/show-incart.js" type="text/javascript"></script>
    <script src="/../almas-parlour/js/cart-append.js" type="text/javascript"></script>
    <script src="/../almas-parlour/js/fav-total.js" type="text/javascript"></script>
    <script src="/../almas-parlour/js/display-append.js" type="text/javascript"></script>
    <script src="/../almas-parlour/js/fav-item.js" type="text/javascript"></script>


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="top-bar" class="container">
    <div class="row">
        <div class="col-md-4">
            <a class="logo navbar-left" href="/../almas-parlour/index.php">
                <img src="<?php if($new_image): echo $new_image;else: ?>/../almas-parlour/images/logo.png<?php endif;?>" class="img-circle" alt="logo-image" height="70" width="70"/>
                <span style="font-family: cambria;font-size: 25px;font-weight: bolder;">
                    alma's parlour
                </span>
            </a>
        </div>
        <div class="col-md-8">
            <div class="account navbar-right" style="padding: 5px 0 0 0;">
                <ul class="user-menu">
                    <?php if(!empty($user_email)):?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <?php echo substr($user_email,0,strpos($user_email,'@'));?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/../behind-scenes/sign-out.php">Sign Out</a></li>
                            <li><a href="/../users/account-details">Account</a></li>
                        </ul>
                    </li>
                    <?php else:?>
                    <li>
                        <a href="#" title="Sign Up">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Log In">
                            <span class="glyphicon glyphicon-log-in"></span>
                        </a>
                    </li>
                    <?php endif;?>
                    <li>
                        <a href="/../almas-parlour/view/user-info.php" title="Favourites">
                            <i class="glyphicon glyphicon-heart"></i>
                            <span class="badge fav-item-count" style="background: green;"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/../almas-parlour/view/in-cart.php" title="Cart">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <span class="badge item-count" style="background: purple;"></span>
                        </a>
                        <input type="hidden" value="<?php echo $user_email;?>" id="user_id"/>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="snackbar">

</div>
</body>
</html>