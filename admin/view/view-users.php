<?php

//include master file
include_once __DIR__.'/../include/admin.master.php';
?>
<title>Users Management - View Users</title>
<div class="content-wrapper">
    <div class="content">
        <div content="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3>View Users</h3>
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
                                <tr>
                                    <th></th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>E-Mail</th>
                                    <th>Post. Code</th>
                                    <th>Address</th>
                                    <th>Telephone</th>
                                    <th>Gender</th>
                                    <th>Accnt. Type</th>
                                    <th>Accnt. Status</th>
                                    <th>Admin. Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" w-checkbox" value="" id="view-checkbox"/>
                                    </td>
                                    <td><img src="/../almas-parlour/icons/female-avatar.png" alt="prod-image" height="50" width="50"></td>
                                    <td>Margai</td>
                                    <td>Wangara</td>
                                    <td>margaiwangara@gmail.com</td>
                                    <td>50102</td>
                                    <td>Mumias, Kenya</td>
                                    <td>+254 715 776895</td>
                                    <td>Male</td>
                                    <td>Admin - A|D|E</td>
                                    <td><span class="label label-success">Active</span></td>
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
