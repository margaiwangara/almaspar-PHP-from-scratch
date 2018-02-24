<?php

//include master file
include_once __DIR__."/../include/master.inc.php";

//include cart display file
include_once __DIR__."/../behind-scenes/cart-display.php";

//include uncart file
include_once __DIR__."/../behind-scenes/un-cart.php";

//include most sold
include_once __DIR__.'/../behind-scenes/most-sold.php';

?>
<title>Alma's Parlour - Shopping Cart</title>
<div class="container" id="wrapper">

    <?php
        //navigation
        include_once __DIR__."/../include/navbar.inc.php";

    ?>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title"><span class="text"><strong>SHOPPING</strong> Cart</span></h4>

                <?php
                    //hide form if there is no items or if is not member
                    if(!isset($_SESSION['USER_EMAIL']) || $noOfItems < 1):
                ?>
                    <style>#cart_form{display:none;}</style>

                    <h4 class="text-center">
                        <strong>
                            <?php if(isset($_SESSION['USER_EMAIL'])) echo "Hello ".substr($_SESSION['USER_EMAIL'],0,strpos($_SESSION['USER_EMAIL'],'@')).", ".$cart_message;else echo $cart_message;?>
                        </strong>
                    </h4>
                <?php endif;?>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="cart_form">
                <div class="row">
                    <?php if(isset($_SESSION['USER_EMAIL']) && !empty($cart_show_item_id)):foreach($cart_show_item_id as $key=>$value):?>
                    <div class="col-md-9" style="border: outset lightgray 1px;margin-left: 5px;margin-right: 5px;border-left: none;border-right: outset lightgray 1px;padding:5px 2px 0 0;">
                        <div class="col-md-2">
                            <div class="checkbox">
                                <label><input type="checkbox" value="<?php echo $cart_show_item_id[$key];?>" name="uncart_checker[]">Remove</label>
                                <input type="hidden" value="<?php echo $cart_show_item_id[$key];?>" name="cart_item_id[]"/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <p class="thumbnail">
                                <a href="display-item.php?ic=<?php echo md5($cart_show_item_id[$key]);?>-<?php echo $cart_show_item_id[$key];?>">
                                    <img src="<?php echo $cart_show_image[$key];?>" alt="dress-image-1"/>
                                </a>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p>
                            <h5>
                                <a href="display-item.php?ic=<?php echo md5($cart_show_item_id[$key]);?>-<?php echo $cart_show_item_id[$key];?>">
                                    <?php echo $cart_show_name[$key];?>
                                </a>
                            </h5>
                            </p>
                        </div>
                        <div class="col-md-2">
                            <input type="number" value="<?php echo $cart_show_quantity[$key];?>" class="form-control" min="1" name="uncart_quantity[]"/>
                        </div>
                        <div class="col-md-1">
                            <p>
                                Kshs. <?php echo $cart_show_oprice[$key];?>
                            </p>
                        </div>
                        <div class="col-md-2">
                            <p>
                                Kshs. <?php echo $cart_show_nprice[$key];?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach;else:echo "<strong style='margin-left: 15px;'>".$cart_message."</strong>";endif;?>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-9">
                        <h5 class="text-right"><strong>Total: Kshs. <?php echo $total_price;?></strong></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-9">
                        <div class="col-md-12">
                            <p>
                            <h5><strong>What Next?</strong></h5>
                            If you have a coupon number please input to get discounts and offers:
                            </p>
                            <div class="col-md-4" style="margin-left: -15px;">
                                <div class="input-group">
                                    <input type="text" placeholder="Coupon" class="form-control disabled"/>
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-primary disabled">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-9">
                        <div class="text-right">
                            <h6><strong>SubTotal:</strong>Kshs. 0.00</h6>
                            <h6><strong>Eco Tax(-2):</strong>Kshs. 0.00</h6>
                            <h6><strong>VAT(17.5%):</strong>Kshs. 0.00</h6>
                            <h6><strong>Total:</strong>Kshs. <?php echo $total_price ?></h6>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-9">
                        <div class="text-left">
                            <button type="submit" class="btn btn-primary" name="update_cart">Update</button>
                            <button type="button" class="btn btn-default"><a href="item-dresses.php">Shop More</a></button>
                            <a href="checkout.php"><button type="button" class="btn btn-success" name="cart-checkout">Checkout</button></a>
                            <span class="uncart-message" style="color: red;font-weight: bold;"><?php echo $update_cart_message;?></span>
                        </div>
                    </div>
                </div>
                <hr>
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title"><span class="text"><strong>most sold</strong> items</span></h4>
                        <div class="item">
                            <div class="row">
                                <?php if($ms_id):foreach(array_reverse($ms_id,true) as $key=>$value):?>
                                    <div class="col-md-3">
                                        <div class="product-box">
                                            <a href="/../almas-parlour/view/display-item.php?ic=<?php echo md5($ms_id[$key]);?>-<?php echo $ms_id[$key];?>" class="thumbnail">
                                                <img src="<?php echo $ms_image[$key];?>" alt="product-image-<?php echo md5($ms_id[$key]);?>"/>
                                            </a>
                                            <a href="/../almas-parlour/view/display-item.php?ic=<?php echo md5($ms_id[$key]);?>-<?php echo $ms_id[$key];?>" class="title">
                                                <?php echo $ms_name[$key];?>
                                            </a><br/>
                                            <a href="/../almas-parlour/view/display-item.php?ic=<?php echo md5($ms_id[$key]);?>-<?php echo $ms_id[$key];?>" class="category">
                                                <?php echo $ms_type[$key];?>
                                            </a>
                                            <p class="price">Kshs. <?php echo $ms_price[$key];?></p>
                                        </div>
                                    </div>
                                    <?php endforeach;else:
                                    echo "<span style='margin-left: 20px;margin-right: 20px;'>There are no items to display</span>";endif;?>
                            </div>
                            <hr>
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