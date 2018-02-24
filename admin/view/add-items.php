<?php

//include add submit file
include_once __DIR__.'/../back-end/add-products.php';

//include item builders
include_once __DIR__.'/../back-end/item-builders.php';

//include master file
include_once __DIR__.'/../include/admin.master.php';



?>
<title>Alma's Parlour - Add Products</title>
<div class="content-wrapper">
    <div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3>Add Products</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#add-general">General</a> </li>
                        <li><a data-toggle="tab" href="#add-visual">Visual</a> </li>
                        <li><a data-toggle="tab" href="#add-other">Other</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="add-general">
                            <!--Partitions
                                item-code,item-name,item-type,item-description,price,size,quantity-->
                            <div class="row">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
                                <div class="col-md-6 add-display">
                                        <div class="form-group">
                                            <label for="add-code">Item Code:</label>
                                            <input type="text" name="add-code" id="add-code" class="form-control" value="<?php if(isset($_POST['add-code'])) echo $_POST['add-code'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="add-name">Item Name:</label>
                                            <textarea class="form-control" rows="3" name="add-name" id="add-name" style="resize: none;"><?php if(isset($_POST['add-name'])) echo $_POST['add-name'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="add-type">Item Type:</label>
                                            <select name="add-type" id="add-type" class="form-control">
                                                <?php if($type_id):foreach($type_id as $key=>$value):?>
                                                    <option value="<?php echo $type_category[$key];?>"><?php echo ucfirst($type_category[$key]);?></option>
                                                <?php endforeach;endif;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="add-descr">Item Description</label>
                                            <textarea class="form-control" name="add-descr" id="add-descr" rows="5" style="resize: none;"><?php if(isset($_POST['add-descr'])) echo $_POST['add-descr'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="add-size">Item Size:</label>
                                            <select name="add-size" id="add-size-csm" class="form-control" style="display: none;">
                                                <?php if($size_id):foreach($size_id as $key=>$value):if($item_type[$key] == 'beauty'):?>
                                                    <option value="<?php echo $size_name[$key];?>"><?php echo strtoupper($size_name[$key]);?>ml</option>
                                                <?php endif;endforeach;endif;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="add-size" class="form-control" id="add-size-clths">
                                                <?php if($size_id):foreach($size_id as $key=>$value):if($item_type[$key] == 'garment'):?>
                                                    <option value="<?php echo $size_name[$key];?>"><?php echo strtoupper($size_name[$key]);?></option>
                                                <?php endif;endforeach;endif;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="add-price">Item Price</label>
                                            <input type="text" name="add-price" id="add-price" class="form-control" value="<?php if(isset($_POST['add-price'])) echo $_POST['add-price'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="add-quantity">Item Quantity:</label>
                                            <input type="number" min="1"value="<?php if(isset($_POST['add-quantity'])) echo $_POST['add-quantity'];else echo '1';?>" class="form-control" name="add-quantity" id="add-quantity">
                                        </div>
                                    </div>
                                    <div class="col-md-6 add-display">
                                        <div class="form-group">
                                            <label for="add-color">Item Color:</label>
                                            <select name="add-color" id="add-color" class="form-control">
                                                <?php if($color_id):foreach($color_id as $key=>$value):?>
                                                    <option value="<?php echo $color_name[$key];?>"><?php echo ucfirst($color_name[$key]);?></option>
                                                <?php endforeach;endif;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="add-image">Item Image: (Max 4)</label>
                                                <input type="file" name="imagefile[]" id="add-image" multiple="multiple">
                                        </div>
                                        <div class="form-group">
                                            <label for="add-info">Additional Info:</label>
                                                <textarea name="add-info" class="form-control" id="add-info" rows="5" style="resize: none;"><?php if(isset($_POST['add-info'])) echo $_POST['add-info'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit" name="add-submit" id="add-submit">
                                                <i class="fa fa-plus"></i> Add Item
                                            </button>
                                        </div>
                                        <span style="color: red;" class="display-message"><?php echo $ef_message;?></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="add-visual">
                            <div class="row">
                                <div class="col-md-12">

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="add-other">
                            Other stuff go here
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        $("[name=add-type]").on('change',function()
        {
            if($(this).val() == 'cosmetics')
            {
                $("#add-size-csm").toggle();
                $("#add-size-clths").toggle();
            }else
            {
                $("#add-size-csm").hide();
                $("#add-size-clths").show();
            }

        });
        $(function()
        {
            $("input[type='file']").on('change',function(e)
            {
                $(".thumbnails").val("");
                if(parseInt($(this).get(0).files.length) > 4)
                {
                    alert("You can only upload a maximum of 4 files");
                }
                else
                {
                    var imagesPreview = function(input, placeToInsertImagePreview) {

                        if (input.files) {
                            var filesAmount = input.files.length;

                            for (i = 0; i < filesAmount; i++) {
                                var reader = new FileReader();

                                reader.onload = function(event) {
                                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                                }

                                reader.readAsDataURL(input.files[i]);
                            }
                        }

                    };

                    imagesPreview(this,".thumbnails");
                }
            });
        })
    </script>
</div>
