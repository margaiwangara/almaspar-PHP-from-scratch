<?php

//include header file
include_once __DIR__.'/../include/master.inc.php';

//redirect if not a member
if(!isset($_SESSION['USER_EMAIL']))
    echo "<script>window.location.replace('/../../index.php')</script>";

//include product file
include_once __DIR__."/../behind-scenes/favourite-items.php";



?>
<title>User Information - Favorites</title>
<div id="wrapper" class="container">
    <?php
    //include navigation bar
    include __DIR__."/../include/navbar.inc.php";

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
                    <div class="fav-items" id="user-favourites">
                        <?php if($liked_id):foreach($liked_id as $key=>$value):?>
                            <div class="col-md-3" style="margin-bottom: 15px;">
                                <div class="product-box">
                                    <span class="sale_tag"></span>
                                    <a class="thumbnail" href="display-item.php?ic=<?php echo md5($liked_id[$key]);?>-<?php echo $liked_id[$key];?>">
                                        <img src="<?php echo $liked_image[$key];?>" alt="dress-image-<?php echo md5($liked_id[$key]);?>">
                                    </a><br/>
                                    <a href="display-item.php?ic=<?php echo md5($liked_id[$key]);?>-<?php echo $liked_id[$key];?>" class="title"><?php echo $liked_name[$key];?></a><br/>
                                    <a href="display-item.php?ic=<?php echo md5($liked_id[$key]);?>-<?php echo $liked_id[$key];?>" class="category"><?php echo $liked_type[$key];?></a>
                                    <p class="price">Kshs. <?php echo $liked_price[$key];?></p>
                                    <p class="time-display">Added: <?php echo $liked_date[$key];?></p>
                                </div>
                                <!--Item info-->
                                <input type="hidden" value="<?php echo $liked_id[$key];?>" id="item_id"/>
                                <input type="hidden" value="1" id="item-quantity-id"/>
                                <input type="hidden" value="<?php echo $liked_price[$key];?>" id="item_price"/>
                            </div>
                        <?php endforeach;else:
                        echo "<span style='margin-right: 20px;margin-left: 20px;'>You have no items in your favourites list</span>";endif;?>
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
