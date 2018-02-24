<?php
//include items display file
include_once __DIR__.'/../back-end/jumpsuits-display.php';

//items delete file
include_once __DIR__.'/../back-end/product-delete.php';

//include master file
include_once __DIR__.'/../include/admin.master.php';
?>
<title>Products Management - View Products</title>
<div class="content-wrapper">
    <div class="content">
        <div content="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3>View Products - Jumpsuits</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    <div class="box-body">
                        <?php
                            //include product categories
                            include_once __DIR__.'/../include/products-category.php';

                        ?>
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Prod. Image</th>
                                    <th>Prod. Code</th>
                                    <th>Prod. Name</th>
                                    <th>Prod. Quant.</th>
                                    <th>Prod. Color</th>
                                    <th>Prod. Size</th>
                                    <th>Prod. Price</th>
                                    <th>Admin. Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($jumpsuits_id):foreach($jumpsuits_id as $key=>$value):?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="<?php echo $value;?>" name="view-checkbox[]" id="view-checkbox"/>
                                        </td>
                                        <td class="thumbnail"><img src="<?php echo $jumpsuits_image[$key]?>" alt="prod-image" height="70" width="50"></td>
                                        <td><?php echo $jumpsuits_code[$key];?></td>
                                        <td><?php echo $jumpsuits_name[$key];?></td>
                                        <td><?php echo $jumpsuits_quantity[$key];?></td>
                                        <td><?php echo $jumpsuits_color[$key];?></td>
                                        <td><?php echo $jumpsuits_size[$key];?></td>
                                        <td>Kshs. <?php echo $jumpsuits_price[$key];?></td>
                                        <td><a href="#" id="<?php echo $value;?>" class="solo-delete" name="solo-delete">Delete</a> | <a href="/../almas-parlour/admin/view/edit-items.php?r=<?php echo $value;?>&m=<?php echo md5(rand());?>" target="_blank">Edit</a></td>
                                    </tr>
                                <?php endforeach;else: echo $jumpsuits_message;endif;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="form-group pull-right">
                            <button class="btn btn-primary" type="submit" name="update-list">
                                <span class="fa fa-edit"></span> Update List
                            </button>
                        </div>
                        <span class="pull-left" style="color='red';">
                            <?php if($delete_message) echo $delete_message;?>
                        </span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
