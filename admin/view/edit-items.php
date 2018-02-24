<?php

//include master file
include_once __DIR__.'/../include/admin.master.php';

//edit final
include_once __DIR__.'/../back-end/edit-products-final.php';

//include edit item file
include_once __DIR__.'/../back-end/product-edit.php';

//include item builders
include_once __DIR__.'/../back-end/item-builders.php';

?>
<title>Alma's Parlour - Edit Products</title>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3>Edit Products</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#edit-general">General</a> </li>
                            <li><a data-toggle="tab" href="#edit-visual">Visual</a> </li>
                            <li><a data-toggle="tab" href="#edit-other">Other</a> </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="edit-general">
                                <!--Partitions
                                    item-code,item-name,item-type,item-description,price,size,quantity-->
                                <div class="row">
                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']."?r=".$prod_id."&m=".md5(rand()));?>" method="post">
                                        <div class="col-md-6 add-display">
                                            <div class="form-group">
                                                <label for="edit-code">Item Code:</label>
                                                <input type="text" name="edit-code" id="edit-code" class="form-control" value="<?php if(isset($_POST['edit-code'])) echo $_POST['edit-code'];else echo $prod_code;?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="add-name">Item Name:</label>
                                                <textarea class="form-control" rows="3" name="edit-name" id="edit-name" style="resize: none;"><?php if(isset($_POST['edit-name'])) echo $_POST['edit-name'];else echo $prod_name;?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-type">Item Type:</label>
                                                <select name="edit-type" id="edit-type" class="form-control">
                                                    <?php if($type_id):foreach($type_id as $key=>$value):?>
                                                    <option value="<?php echo $type_category[$key];?>" <?php if($prod_type == $type_category[$key]):?>selected<?php endif;?>><?php echo ucfirst($type_category[$key]);?></option>
                                                    <?php endforeach;endif;?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="add-descr">Item Description</label>
                                                <textarea class="form-control" name="edit-descr" id="edit-descr" rows="5" style="resize: none;"><?php if(isset($_POST['edit-descr'])) echo $_POST['edit-descr'];else echo $prod_descr;?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-price">Item Price</label>
                                                <input type="text" name="edit-price" id="edit-price" class="form-control" value="<?php if(isset($_POST['edit-price'])) echo $_POST['edit-price'];else echo $prod_price;?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-size">Item Size:</label>
                                                <select name="edit-size" id="edit-size-csm" class="form-control" style="display: none;">
                                                    <?php if($size_id):foreach($size_id as $key=>$value):if($item_type[$key] == 'beauty'):?>
                                                    <option value="<?php echo $size_name[$key];?>" <?php if(strtoupper($prod_size) == strtoupper($size_name[$key])):?>selected<?php endif;?>><?php echo strtoupper($size_name[$key]);?>ml</option>
                                                    <?php endif;endforeach;endif;?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="edit-size" class="form-control" id="edit-size-clths">
                                                    <?php if($size_id):foreach($size_id as $key=>$value):if($item_type[$key] == 'garment'):?>
                                                        <option value="<?php echo $size_name[$key];?>" <?php if(strtoupper($prod_size) == strtoupper($size_name[$key])):?>selected<?php endif;?>><?php echo strtoupper($size_name[$key]);?></option>
                                                    <?php endif;endforeach;endif;?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-quantity">Item Quantity:</label>
                                                <input type="number" min="1" class="form-control" name="edit-quantity" id="edit-quantity" value="<?php if(isset($_POST['edit-quantity'])) echo $_POST['edit-quantity'];else echo $prod_quantity;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 add-display">
                                            <div class="form-group">
                                                <label for="edit-color">Item Color:</label>
                                                <select name="edit-color" id="edit-color" class="form-control">
                                                    <?php if($color_id):foreach($color_id as $key=>$value):?>
                                                    <option value="<?php echo $color_name[$key];?>" <?php if(strtolower($color_name[$key]) == strtolower($prod_color)):?>selected<?php endif;?>><?php echo ucfirst($color_name[$key]);?></option>
                                                    <?php endforeach;endif;?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-info">Additional Info:</label>
                                                <textarea name="edit-info" class="form-control" id="edit-info" rows="5" style="resize: none;" ><?php if(isset($_POST['edit-info'])) echo $_POST['edit-info'];else echo $prod_addinfo;?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" value="<?php echo $prod_id;?>" name="ui">
                                                <button class="btn btn-primary" type="submit" name="edit-submit" id="edit-submit">
                                                    <i class="fa fa-edit"></i> Update Item
                                                </button>
                                            </div>
                                            <span style="color: red;font-size: medium;">
                                                <?php if($ef_message) echo $ef_message;?>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="edit-visual">
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
        $("[name=edit-type]").on('change',function()
        {
            if($(this).val() == 'cosmetics')
            {
                $("#edit-size-csm").toggle();
                $("#edit-size-clths").toggle();
            }else
            {
                $("#edit-size-csm").hide();
                $("#edit-size-clths").show();
            }

        });
        $(function()
        {
            $("input[type='file']").on('change',function(e)
            {
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
