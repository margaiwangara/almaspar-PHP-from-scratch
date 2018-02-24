<footer class="body-footer well">
    <div class="container">
        <div class="row">
            <div class="col-md-3 links-footer">
                <h4>almasparlour.co.ke</h4>
                <ul>
                    <li><a href="/../almas-parlour/index.php">Home</a></li>
                    <li><a href="/../almas-parlour/view/about-us.php">About Us</a></li>
                    <li><a href="/../almas-parlour/view/item-dresses.php">Products</a></li>
                    <li><a href="/../almas-parlour/view/contact-us.php">Contact Us</a></li>
                    <li><a href="/../almas-parlour/view/terms-and-conditions.php">Terms And Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-3 product-footer">
                <h4>Product Categories</h4>
                <ul>
                    <li><a href="/../almas-parlour/view/item-dresses.php">Dresses</a></li>
                    <li><a href="/../almas-parlour/view/item-cosmetics.php">Cosmetics</a></li>
                    <li><a href="/../almas-parlour/view/item-jumpsuits.php">Jumpsuits</a></li>
                    <li><a href="/../almas-parlour/view/item-nightgowns.php">Nightgowns</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <div class="social-media">
                    <h4>Follow Us</h4>
                    <ul class="list-inline">
                        <li>
                            <a href="#" title="Facebook">
                                <img src="/../almas-parlour/new-icons/fb-circle.png" alt="almas-facebook" height="32" width="32"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Twitter">
                                <img src="/../almas-parlour/new-icons/twitter-circle.png" alt="almas-twitter" height="32" width="32"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Instagram">
                                <img src="/../almas-parlour/new-icons/insta-circle.png" alt="almas-instagram" height="32" width="32"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Google+">
                                <img src="/../almas-parlour/new-icons/gplus-circle.png" alt="almas-google-plus" height="32" width="32"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <h4>Stay With Us</h4>
                    <p style="font-family: Calibri;font-size: 15px;">
                        Stay connected to us with our updated email newsletters and be informed incase of any new products and design developments
                    </p>
                    <form action="/../almas-parlour/behind-scenes/newsletters.php" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Stay With Us" name="newletters_user" value = "<?php if(isset($_SESSION['USER_EMAIL'])) echo $_SESSION['USER_EMAIL'];?>"/>
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary form-control">
                                Sign Up
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <?php
                //include footer to display views
                include_once __DIR__ . '/../behind-scenes/signature-mw.php';

                //include get views to get views
                include_once __DIR__.'/../behind-scenes/view-count.php';

                //include visitor vies
                include_once __DIR__.'/../behind-scenes/visitor_counter.php';
            ?>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-left">
                            <p>&copy; <?php echo date('Y');?> - Alma's Parlour. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <p><?php echo $total_views;?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</footer>