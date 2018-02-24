<?php

//include master file
include_once __DIR__.'/../include/master.inc.php';

//include item display php
include_once __DIR__.'/../behind-scenes/display-item-backend.php';
//another item display
include_once __DIR__.'/../behind-scenes/acquire-items.php';

//include fav items
include_once __DIR__.'/../behind-scenes/fav-item.php';

$item_array[] = FALSE;

if($dp_message)
    header("Location: item-dresses.php");


?>
<title><?php echo $item_name;?></title>
<div id="wrapper" class="container">
    <?php
    //include navigation bar
    include __DIR__."/../include/navbar.inc.php";

    ?>
<div class="main-content">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12" id="display-area">
                    <div class="carousel slide" id="myCarousel">
                        <div class="carousel-inner">
                            <?php if($images_coll):?>
                            <div class="active item" data-slide-number="0">
                                <img src="<?php echo $images_coll[0];?>" alt="product-image-1" class="thumbnail">
                            </div>
                            <?php endif;?>
                            <div class="item" data-slide-number="1">
                                <img src="../items-images/dresses/dress-image-1.jpg" alt="product-image-1" class="thumbnail">
                            </div>
                            <div class="item" data-slide-number="2">
                                <img src="../items-images/dresses/dress-image-2.jpg" alt="product-image-1" class="thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row slider-children" id="slider-thumbs">
                <div class="col-md-11">
                    <div class="thumbnails" style="margin-left: -15px;margin-right: -15px;">
                        <div class="col-md-4">
                            <a class="thumbnail" id="carousel-selector-3">
                                <img src="<?php echo $item_image_path;?>" alt="img-thumb-1"/>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="thumbnail" id="carousel-selector-1">
                                <img src="../items-images/dresses/dress-image-1.jpg" alt="img-thumb-2"/>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="thumbnail" id="carousel-selector-2">
                                <img src="../items-images/dresses/dress-image-2.jpg" alt="img-thumb-3"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="item-info-display" style="margin-top: 10px;">
                <form action="/../almas-parlour/behind-scenes/favs-process.php" method="post">
                <table class="table table-striped">
                    <tr>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" id="fav-button">
                                <span class="glyphicon glyphicon-heart"></span>
                            </button>
                            <input type="hidden" value="<?php echo $item_id_num;?>" id="fav_item_id"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Item Name</th>
                        <td><?php echo $item_name;?></td>
                        <td>
                            <input type="hidden" value="<?php echo $item_id;?>" id ="item_id"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Item Number</th>
                        <td><?php echo $item_code;?></td>
                    </tr>
                    <tr>
                        <th>Item Color</th>
                        <td><?php echo ucfirst($item_color);?></td>
                    </tr>
                    <tr>
                        <th>Item Type</th>
                        <td><?php echo ucfirst($item_type);?></td>
                    </tr>
                    <tr>
                        <th>Item Price</th>
                        <td><?php echo "Kshs. ".$item_price;?><input type="hidden" value="<?php echo $item_price;?>" id="item_price"/></td>
                    </tr>
                    <tr>
                        <th>Item Size</th>
                        <td>
                            <select name="item_size" id="item_size_id" class="form-control">
                                <?php $item_array = array(50,100,250,500,750,1000);$items_array = array('XS','S','M','L','XL','XXl');?>
                                <?php if($item_type != 'cosmetics'):foreach($items_array as $key=>$value):?>
                                <option value="<?php echo $value;?>" <?php if($value == $item_size){?>selected<?php }?>><?php echo $value;?></option>

                                <?php endforeach;else:foreach($item_array as $key=>$value):?>
                                <option value="<?php echo $value;?>"><?php echo $value."ml";?></option>
                                <?php endforeach;endif;?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Item Quantity</th>
                        <td>
                            <div class="quantity-control">
                                <input type="number" min="1" max="<?php echo $item_quantity;?>" name="item_quantity" id="display_quantity" class="form-control input-sm" value="1"/>
                            </div>

                        </td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <td>
                            <div class="form-group">
                                <button class="btn btn-primary form-control" id="display_append">
                                    <span class="glyphicon glyphicon-shopping-cart" align="left"></span> Add to cart
                                </button>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" id="product-tab" data-tab="tabs">
                <li class="test-class active">
                    <a href="#item-descr" data-toggle="tab"> Description</a>
                </li>
                <li class="test-class">
                    <a href="#add-info" data-toggle="tab">Additional Information</a>
                </li>
                <li class="test-class">
                    <a href="#user-reviews" data-toggle="tab">Reviews</a>
                </li>
            </ul>

            <div class="tab-content" id="tab-content-id">
                <div class="tab-pane active" id="item-descr">
                    <p class="desc-text">
                        <?php echo $item_descr;?>
                    </p>
                </div>
                <div class="tab-pane" id="add-info">
                    <p class="info-text">
                        <?php echo $item_add_info;?>
                    </p>
                </div>
                <div class="tab-pane" id="user-reviews">
                    <div class="media">
                        <div class="media-left">
                            <img src="../images/logo.png" class="media-object thumbnail" style="width: 70px;"/>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                Username
                            </h4>
                            <p>
                                This item is awesome
                            </p>
                            <a href="#">Reply</a>
                            <div class="media">
                                <div class="media-left">
                                    <img src="../images/shieldbg.jpg" class="media-object thumbnail" style="width:70px;height: auto;"/>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        Username
                                    </h4>
                                    <p>
                                        This item is awesome
                                    </p>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title">
                        <span class="pull-left"><span class="text"><span class="line">Related <strong>Products</strong></span></span></span>
                        <span class="pull-right">
                            <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
                        </span>
                    </h4>
                    <div id="myCarousel-2" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <?php $counter = 0;?>
                                    <?php foreach($display_id as $key=>$value):
                                        if($counter < 4 && $display_type[$key] == $item_type && $display_id[$key] != $item_id_num):?>
                                        <div class="col-md-3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <a href="display-item.php?ic=<?php echo md5($display_id[$key]);?>-<?php echo $display_id[$key];?>" class="thumbnail">
                                                    <img src="<?php echo $display_image[$key];?>" alt="product-image-<?php echo md5($display_id[$key]);?>" />
                                                </a>
                                                <a href="display-item.php?ic=<?php echo md5($display_id[$key]);?>-<?php echo $display_id[$key];?>" class="title">
                                                    <?php echo $display_name[$key];?>
                                                </a><br/>
                                                <a href="display-item.php?ic=<?php echo md5($display_id[$key]);?>-<?php echo $display_id[$key];?>" class="category">
                                                    <?php echo $display_type[$key];?>
                                                </a>
                                                <p class="price">
                                                    Kshs. <?php echo $display_price[$key];?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php $counter++;endif;endforeach;?>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <?php $counter = 0;foreach(array_reverse($display_id,true) as $key=>$value):
                                            if($counter < 4 && $display_type[$key] == $item_type && $display_id[$key] != $item_id_num):?>
                                    <div class="col-md-3">
                                        <div class="product-box">
                                            <a href="display-item.php?ic=<?php echo md5($display_id[$key]);?>-<?php echo $display_id[$key];?>" class="thumbnail">
                                                <img src="<?php echo $display_image[$key];?>" alt="product-image-<?php echo md5($display_id[$key]);?>"/>
                                            </a>
                                            <a href="display-item.php?ic=<?php echo md5($display_id[$key]);?>-<?php echo $display_id[$key];?>" class="title">
                                                <?php echo $display_name[$key];?>
                                            </a><br/>
                                            <a href="display-item.php?ic=<?php echo md5($display_id[$key]);?>-<?php echo $display_id[$key];?>" class="category">
                                                <?php echo $display_type[$key];?>
                                            </a>
                                            <p class="price">Kshs. <?php echo $display_price[$key];?></p>
                                        </div>
                                    </div>
                                <?php $counter++;endif;endforeach;?>
                                </div>
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

