<?php

//include master file
include_once __DIR__."/include/master.inc.php";

//include the index background
include_once __DIR__.'/behind-scenes/index-backend.php';

?>

<title>Alma's Parlour - Beauty Products, Shoes, Clothing</title>
<div id="wrapper" class="container">
    <?php
        //include navigation bar
        include "include/navbar.inc.php";

    ?>
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup>
                        <h1>We are creative</h1>
                        <h3>Get start your next awesome project</h3>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">See all features</button>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <hgroup>
                        <h1>We are smart</h1>
                        <h3>Get start your next awesome project</h3>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">See all features</button>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">
                    <hgroup>
                        <h1>We are amazing</h1>
                        <h3>Get start your next awesome project</h3>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">See all features</button>
                </div>
            </div>
        </div>
    </div>
    <div class="header_text">
        At <strong>Alma's Parlour</strong> we offer the latest design trends in dresses and jumpsuits at great prices.
        <br/>Cosmetics are also available at affordable prices
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
                            <span class="pull-right">
                                <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
                            </span>
                        </h4>
                        <div id="myCarousel" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <?php $counter = 0;?>
                                        <?php if($featured_id):foreach($featured_id as $key=>$value):
                                                if($counter < 4):?>
                                        <div class="col-md-3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <a href="display/<?php echo md5($featured_id[$key]);?>-<?php echo $featured_id[$key];?>/<?php echo $featured_name[$key];?>" class="thumbnail">
                                                    <img src="<?php echo $featured_image[$key];?>" alt="product-image-<?php echo md5($featured_id[$key]);?>&n=<?php echo $featured_name[$key];?>" />
                                                </a>
                                                <a href="view/display-item.php?ic=<?php echo md5($featured_id[$key]);?>-<?php echo $featured_id[$key];?>&n=<?php echo $featured_name[$key];?>" class="title">
                                                    <?php echo $featured_name[$key];?>
                                                </a><br/>
                                                <a href="view/display-item.php?ic=<?php echo md5($featured_id[$key]);?>-<?php echo $featured_id[$key];?>&n=<?php echo $featured_name[$key];?>" class="category">
                                                    <?php echo $featured_type[$key];?>
                                                </a>
                                                <p class="price">
                                                    Kshs. <?php echo $featured_price[$key];?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php $counter++;endif;endforeach;else:
                                            echo "<span style='margin-left: 20px;margin-right: 20px;'>There are no items to display</span>";endif;?>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <?php $counter = 0;if($featured_id):foreach(array_reverse($featured_id,true) as $key=>$value):if($counter < 4):?>
                                        <div class="col-md-3">
                                            <div class="product-box">
                                                <a href="view/display-item.php?ic=<?php echo md5($featured_id[$key]);?>-<?php echo $featured_id[$key];?>&n=<?php echo $featured_name[$key];?>" class="thumbnail">
                                                    <img src="<?php echo $featured_image[$key];?>" alt="product-image-<?php echo md5($featured_id[$key]);?>"/>
                                                </a>
                                                <a href="view/display-item.php?ic=<?php echo md5($featured_id[$key]);?>-<?php echo $featured_id[$key];?>&n=<?php echo $featured_name[$key];?>" class="title">
                                                    <?php echo $featured_name[$key];?>
                                                </a><br/>
                                                <a href="view/display-item.php?ic=<?php echo md5($featured_id[$key]);?>-<?php echo $featured_id[$key];?>&n=<?php echo $featured_name[$key];?>" class="category">
                                                    <?php echo $featured_type[$key];?>
                                                </a>
                                                <p class="price">Kshs. <?php echo $featured_price[$key];?></p>
                                            </div>
                                        </div>
                                        <?php $counter++;endif;endforeach;else:
                                        echo "<span style='margin-left: 20px;margin-right: 20px;'>There are no items to display</span>";endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title">
                            <span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
                            <span class="pull-right">
                                <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
                            </span>
                        </h4>
                        <div id="myCarousel-2" class="myCarousel carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <?php $counter = 0;?>
                                        <?php if($new_arrivals_id):foreach($new_arrivals_id as $key=>$value):
                                            if($counter < 4):?>
                                            <div class="col-md-3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <a href="view/display-item.php?ic=<?php echo md5($new_arrivals_id[$key]);?>-<?php echo $new_arrivals_id[$key];?>" class="thumbnail">
                                                        <img src="<?php echo $new_arrivals_image[$key];?>" alt="newarrival-image-<?php echo md5($new_arrivals_id[$key]);?>" />
                                                    </a>
                                                    <a href="view/display-item.php?ic=<?php echo md5($new_arrivals_id[$key]);?>-<?php echo $new_arrivals_id[$key];?>" class="title">
                                                        <?php echo $new_arrivals_name[$key];?>
                                                    </a><br/>
                                                    <a href="view/display-item.php?ic=<?php echo md5($new_arrivals_id[$key]);?>-<?php echo $new_arrivals_id[$key];?>" class="category">
                                                        <?php echo $new_arrivals_type[$key];?>
                                                    </a>
                                                    <p class="price">Kshs. <?php echo $new_arrivals_price[$key];?></p>
                                                </div>
                                            </div>
                                        <?php $counter++;endif;endforeach;else:
                                        echo "<span style='margin-left: 20px;margin-right: 20px;'>There are no items to display</span>";endif;?>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <?php $counter = 0;?>
                                        <?php if($new_arrivals_id):foreach(array_reverse($new_arrivals_id,true) as $key=>$value):
                                            if($counter < 4):?>
                                            <div class="col-md-3">
                                                <div class="product-box">
                                                    <span class="sale_tag"></span>
                                                    <a href="view/display-item.php?ic=<?php echo md5($new_arrivals_id[$key]);?>-<?php echo $new_arrivals_id[$key];?>" class="thumbnail">
                                                        <img src="<?php echo $new_arrivals_image[$key];?>" alt="product-image-<?php echo md5($new_arrivals_id[$key]);?>" />
                                                    </a>
                                                    <a href="view/display-item.php?ic=<?php echo md5($new_arrivals_id[$key]);?>-<?php echo $new_arrivals_id[$key];?>" class="title">
                                                        <?php echo $new_arrivals_name[$key];?>
                                                    </a><br/>
                                                    <a href="view/display-item.php?ic=<?php echo md5($new_arrivals_id[$key]);?>-<?php echo $new_arrivals_id[$key];?>" class="category">
                                                        <?php echo $new_arrivals_type[$key];?>
                                                    </a>
                                                    <p class="price">Kshs. <?php echo $new_arrivals_price[$key];?></p>
                                                </div>
                                            </div>
                                        <?php $counter++;endif;endforeach;else:
                                        echo "<span style='margin-left: 20px;margin-right: 20px;'>There are no items to display</span>";endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row feature_box">
                    <div class="col-md-4">
                        <div class="service">
                            <div class="responsive">
                                <img src="themes/images/feature_img_2.png" alt="" />
                                <h4>MODERN <strong>DESIGN</strong></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service">
                            <div class="customize">
                                <img src="themes/images/feature_img_1.png" alt="" />
                                <h4>FREE <strong>SHIPPING</strong></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service">
                            <div class="support">
                                <img src="themes/images/feature_img_3.png" alt="" />
                                <h4>24/7 LIVE <strong>SUPPORT</strong></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
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
include_once 'include/footer-page.inc.php';
?>






