<?php

//include main file
include_once __DIR__ . '/../include/master.inc.php';
?>
<title>Alma's Parlour - About Us</title>

<div id="wrapper" class="container">
    <?php
        //include navigation bar
        include __DIR__."/../include/navbar.inc.php";
    ?>
    <div class="main-content" style="font-family: Cambria;">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title"><span class="text"><strong>about</strong> us</span></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center" style="font-size: 17px;">
                    Alma's Parlour offers the best and latest clothing designs in nightgowns, jumpsuits and dresses. In addition
                    we also sell cosmetics and beauty products. Clothing products are available in most if not all sizes so are the
                    colors. Join us today to get the best prices on the best goods. In case of any questions or suggestions feel free to
                    visit our <a href="contact-us.php">Contact Us</a> page to get in touch with us.
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="founder-members" style="margin-bottom: 15px;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="founder-box">
                                <p class="thumbnail" style="border: none;">
                                    <img src="../icons/female-avatar.png" alt="founder-avatar" class="img-circle border-warning" height="170" width="170"/>
                                </p>
                                <h4 class="text-center">
                                    <strong>Sally Lyambilla</strong>
                                </h4>
                                <h5 class="text-center">
                                    Chief Executive Office - Founder
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cto-box">
                                <p class="thumbnail" style="border: none;">
                                    <img src="../icons/me-avatar.png" alt="cto-avatar" class="img-circle border-warning" height="170" width="170"/>
                                </p>
                                <h4 class="text-center">
                                    <strong>Margai Wangara</strong>
                                </h4>
                                <h5 class="text-center">
                                    IT Guy
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cto-box">
                                <p class="thumbnail" style="border:none;">
                                    <img src="../icons/lam-avatar.png" alt="cto-avatar" class="img-circle border-warning" height="170" width="170"/>
                                </p>
                                <h4 class="text-center">
                                    <strong>John/Jane Doe</strong>
                                </h4>
                                <h5 class="text-center">
                                    On The Lam
                                </h5>
                            </div>
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
