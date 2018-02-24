<?php
//include items display file
include_once __DIR__.'/../back-end/item-display.php';

//include item sort
include_once __DIR__.'/../back-end/items-sort.php';

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
                        <h3>View Products</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-inline pull-right">
                                    <select class="form-control">
                                        <option>Dresses</option>
                                        <option>Nightgowns</option>
                                        <option>Jumpsuits</option>
                                        <option>Cosmetics</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Prod. Image</th>
                                    <th>Prod. Code</th>
                                    <th>Prod. Name</th>
                                    <th>Prod. Type</th>
                                    <th>Prod. Quant.</th>
                                    <th>Prod. Color</th>
                                    <th>Prod. Price</th>
                                    <th>Admin. Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" value="" id="view-checkbox"/>
                                    </td>
                                    <td><img src="/../almas-parlour/items-images/dresses/dress-image-1.jpg" alt="prod-image" height="70" width="50"></td>
                                    <td>APDR6325412</td>
                                    <td>Awesome red dress</td>
                                    <td>Dress</td>
                                    <td>25</td>
                                    <td>Red</td>
                                    <td>Kshs. 2000.00</td>
                                    <td><a href="#">Delete</a> | <a href="#">Edit</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
