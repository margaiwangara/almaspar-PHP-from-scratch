<?php
//include logo image display page
include_once __DIR__.'/../back-end/logo-update.php';

//include master file
include_once __DIR__.'/../include/admin.master.php';



?>
<title>Alma's Palour - Manage Logo</title>
<div class="content-wrapper">
    <div class="content">
    <div class="row">
        <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Slide Images</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slideshow-images">
                                    <div class="carousel slide" id="myCarousel">
                                        <div class="carousel-inner">
                                            <ol class="carousel-indicators">
                                                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#Carousel" data-slide-to="1"></li>
                                                <li data-target="#Carousel" data-slide-to="2"></li>
                                            </ol>
                                            <div class="item active">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <a class="thumbnail" href="#"><img src="/../almas-parlour/slide-images/dress-image-1.jpg" alt="slide-image-1"></a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a class="thumbnail" href="#"><img src="/../almas-parlour/slide-images/dress-image-2.jpg" alt="slide-image-2"></a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a class="thumbnail" href="#"><img src="/../almas-parlour/slide-images/dress-image-3.jpg" alt="slide-image-3"></a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a class="thumbnail" href="#"><img src="/../almas-parlour/slide-images/dress-image-4.jpg" alt="slide-image-4"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <a class="thumbnail" href="#"><img src="/../almas-parlour/slide-images/dress-image-5.jpg" alt="slide-image-5"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="slide-operations">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <form action="" method="post">
                                                            <div class="form-group">
                                                                <label for="add-slide">Add Slide</label>
                                                                <input type="file" name="add-slide" id="add-slide">
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-success" name="add-slide-submit" id="add-slide-submit">
                                                                    <span class="fa fa-plus"></span> Add Slide Image
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <form action="" method="post">
                                                            <div class="form-group">
                                                                <label for="delete-slide">Delete Slide Image</label>
                                                                <select name="delete-slide" class="form-control" multiple="multiple" id="delete-slide">
                                                                    <option value="1">Slide 1</option>
                                                                    <option value="2">Slide 2</option>
                                                                    <option value="3">Slide 3</option>
                                                                    <option value="4">Slide 4</option>
                                                                    <option value="5">Slide 5</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn btn-success" type="submit" name="img-del-submit" id="img-del-submit">
                                                                    <span class="fa fa-minus"></span>  Delete Image
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <form action="" method="post">
                                                            <div class="form-group">
                                                                <label for="update-slide">Change Slide Image</label>
                                                                <select name="update-slide" class="form-control" id="update-slide">
                                                                    <option value="1">Slide 1</option>
                                                                    <option value="2">Slide 2</option>
                                                                    <option value="3">Slide 3</option>
                                                                    <option value="4">Slide 4</option>
                                                                    <option value="5">Slide 5</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="file" name="update-img-file" id="update-img-file">
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn btn-success" type="submit" name="img-update-submit" id="img-update-submit">
                                                                    <span class="fa fa-edit"></span> Update Image
                                                                </button>
                                                            </div>
                                                        </form>
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
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Logo Image</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-inner">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">
                                        <a href="#" class="thumbnail"><img src="<?php if($new_image) echo $new_image;else echo '/../almas-parlour/images/logo.png';?>" alt="logo-image"></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="logo-update">Upload Logo</label>
                                        <input type="file" name="logo-update" id="logo-update">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="logo-update-submit" id="logo-update-submit" class="btn btn-success pull-right">
                                            <span class="fa fa-edit"></span> Update Logo
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="col-md-4">
                        <?php if($logo_message):?>
                        <div class="alert alert-info alert-dismissible fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <span class="error-display"><strong><?php echo $logo_message;?></strong></span>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>