<?php

//include master file
include_once __DIR__.'/../include/admin.master.php';
?>
<title>Users Management - Add Users</title>
<div class="content-wrapper">
    <div class="content">
        <div content="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3>Add Users</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="box-body">
                            <div class="panel panel-success add-display">
                                <div class="panel-body">
                                    <form action="" method="post">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="add-fname">First Name</label>
                                                <input type="text" class="form-control" name="add-fname" id="add-fname">
                                            </div>
                                            <div class="form-group">
                                                <label for="add-surname">Surname</label>
                                                <input type="text" class="form-control" name="add-surname" id="add-surnam">
                                            </div>
                                            <div class="form-group">
                                                <label for="add-email">Email</label>
                                                <input type="email" class="form-control" name="add-email" id="add-email">
                                            </div>
                                            <label for="add-gender">Gender</label>
                                            <div class="radio">
                                                <label><input type="radio" name="add-gender" id="add-gender" checked> Male</label>
                                                <label><input type="radio" name="add-gender" id="add-gender"> Female</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="add-password">Password</label>
                                                <input type="password" class="form-control" name="add-password" id="add-password">
                                            </div>
                                            <div class="form-group">
                                                <label for="add-cpassword">Confirm Password</label>
                                                <input type="password" class="form-control" name="add-cpassword" id="add-cpassword">
                                            </div>
                                            <label for="add-role">Role</label>
                                            <div class="radio">
                                                <label><input type="radio" name="add-role" id="add-role" value="1" checked> Admin</label>
                                                <label><input type="radio" name="add-role" id="add-role" value="2"> Client</label>
                                            </div>
                                            <div class="role-box" style="display:none;">
                                                <label for="role-priviledge">User Priviledges</label>
                                                <div class="checkbox add-roles-selector" >
                                                    <label><input type="checkbox" name="priviledge-add" id="priviledge-add" value="1"> Add Items</label>
                                                    <label><input type="checkbox" name="priviledge-edit" id="priviledge-edit" value="2"> Edit Items</label>
                                                    <label><input type="checkbox" name="priviledge-delete" id="priviledge-delete" value="3"> Delete Items</label>
                                                </div>
                                            </div>
                                            <div class="checkbox add-checkbox" style="display: none;">
                                                <label for="add-checkbox"><input type="checkbox" name="add-checkbox" id="add-checkbox" value="1"> I accept the <a href="#">Terms And Conditions</a></label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="add-user-submit" class="btn btn-success pull-right" id="add-user-submit">
                                                    <span class="fa fa-plus"></span> Add User
                                                </button>
                                            </div>
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
<script>
    $("[name=add-role]").on('change',function()
    {
        $(".add-checkbox").toggle();
    })
</script>
