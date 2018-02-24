<?php

//include header file
include_once __DIR__.'/../include/master.inc.php';

//include product file
include_once __DIR__."/../behind-scenes/acquire-items.php";

?>
<title>Our Products - Dresses</title>
<div id="wrapper" class="container">
    <?php
    //include navigation bar
    include __DIR__."/../include/navbar.inc.php";

    ?>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title"><span class="text"><strong>PRODUCT</strong> DRESSES</span></h4>
                <div class="dress-items">
                    <?php if($display_id):foreach($display_id as $key=>$value):if($display_type[$key] == 'dress'):?>
                        <div class="col-md-3" style="margin-bottom: 15px;">
                            <div class="product-box">
                                <span class="sale_tag"></span>
                                <a class="thumbnail" href="display-item.php?ic=<?php echo md5($display_id[$key]);?>-<?php echo $display_id[$key];?>">
                                    <img src="<?php echo $display_image[$key];?>" alt="dress-image-<?php echo md5($display_id[$key]);?>">
                                </a><br/>
                                <a href="display-item.php?ic=<?php echo md5($display_id[$key]);?>-<?php echo $display_id[$key];?>" class="title"><?php echo $display_name[$key];?></a><br/>
                                <a href="display-item.php?ic=<?php echo md5($display_id[$key]);?>-<?php echo $display_id[$key];?>" class="category"><?php echo $display_type[$key];?></a>
                                <p class="price">Kshs. <?php echo $display_price[$key];?></p>
                                <p class="time-display">Posted: <?php echo $display_date[$key];?></p>
                                <button type="button" class="btn btn-primary append-cart" id="<?php echo $display_id[$key].'-1-'.$display_price[$key];?>">Add to cart</button>
                            </div>
                            <!--Item info-->
                            <input type="hidden" value="<?php echo $display_id[$key];?>" class="item_id"/>
                            <input type="hidden" value="1" class ="append_quantity"/>
                            <input type="hidden" value="<?php echo $display_price[$key];?>" class="item_price"/>
                        </div>
                    <?php endif;endforeach;else:
                        echo "<span style='margin: 0 20px 20px 20px;'>There are no items to display</span>";endif;?>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

//include footer
include_once __DIR__.'/../include/footer-page.inc.php';
?>
