<?php

//include once
include_once __DIR__.'/../include/admin.master.php';

?>
<title>Newsletters</title>
<div class="content-wrapper">
    <div class="content">
        <div content="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3>Newsletters</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <th>Newsletter Id</th>
                                <th>Newsletter Name</th>
                                <th>Newsletter Type</th>
                                <th>Newsletter File</th>
                                <th>Upload Date</th>
                                <th>Admin Operations</th>
                                </thead>
                                <tbody>
                                <td>APNS101253</td>
                                <td>Dressing Up</td>
                                <td>Dress Advice</td>
                                <td>newletter.pdf</td>
                                <td>21<sup>st</sup> April 2017 10:15:25 PM</td>
                                <td><a href="#">Delete</a></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box-footer">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="newspaper-upload">Upload Newspaper</label>
                                <input type="file" name="newspaper-upload" id="newspaper-upload">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="newspaper-upload-submit" id="newspaper-upload-submit" class="btn btn-success">
                                    <span class="fa fa-plus"></span> Upload and Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>