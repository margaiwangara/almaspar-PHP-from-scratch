<?php

//include master file
include_once __DIR__.'/../include/master.inc.php';

?>
<title>Alma's Parlour - Contact Us</title>

<div id="wrapper" class="container">
    <?php
    //include navigation bar
    include __DIR__."/../include/navbar.inc.php";

    ?>
    <div class="row">
        <div class="col-md-12 ">
            <h4 class="title"><span class="text"><strong>contact</strong> us</span></h4>
            <div class="col-md-4">
                <div class="well" style="font-family: Calibri;font-size: 14px;">
                    <table class="table table-condensed" >
                        <tbody>
                        <tr>
                            <th>E-Mail</th>
                            <td>customercare@almasparlour.co.ke</td>
                        </tr>
                        <tr>
                            <th>Telephone</th>
                            <td>05547896534</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>04526358975</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-condensed">
                        <tbody>
                        <tr>
                            <th>Address</th>
                        </tr>
                        <tr>
                            <td>50102 - 64 Mumias, Kenya</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="well">
                    <form action="/../almas-parlour/behind-scenes/send-messages.php" method="get" autocomplete="off">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_name" id="user_name_id" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="user_email" id="user_email_id" placeholder="user@example.com" <?php if(isset($_SESSION['USER_EMAIL'])) echo "value='".$_SESSION['USER_EMAIL']."' readonly";?> required/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="9" name="user_message" id="user_message_id" placeholder="Write Message..." style="resize: none;" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php

//include footer
include_once __DIR__.'/../include/footer-page.inc.php';
?>