<?php

//include master file
include_once __DIR__."/../include/master.inc.php";

?>

<title>User Information - Delete Account</title>
<div class="container" id="wrapper">
    <?php
        //add navbar
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
                    <div class="text-center">
                        <h4 class="title"><span class="text"><strong> delete</strong> account</span></h4>
                        <p>
                            Dear User,<br>Before deleting your account please <a href="contact-us.php">Contact Us</a> to see if you can provide
                            tips on how we can serve you better
                        </p>
                        <p>
                            To delete your account please press the button below. Please note that <strong>once you click the button your account and information related to it will be deleted parmanently.</strong>
                        </p>
                        <button type="button" class="btn btn-default" id="deleteuser_submit">
                            <a href="/../almas-parlour/behind-scenes/delete-user.php?ui_del=<?php $safeword = 'INANA302527#';echo md5($safeword);?>">Delete Account</a>
                        </button>
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
