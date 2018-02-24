<?php

//include master file
include_once __DIR__.'/../include/admin.master.php';

?>
<title>User Management - Edit User Information</title>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3>Add Users</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="panel panel-success add-display">
                            <div class="panel-body">
                                <form action="" method="post">
                                    <div class="col-md-6">
                                        <h4><strong>Account Details</strong></h4>
                                        <hr>
                                        <div class="form-group">
                                            <label for="update-fname">First Name</label>
                                            <input type="text" name="update-fname" class="form-control" id="update-fname">
                                        </div>
                                        <div class="form-group">
                                            <label for="update-surname">Surname</label>
                                            <input type="text" name="update-surname" class="form-control" id="update-surname">
                                        </div>
                                        <div class="form-group">
                                            <label for="update-email">Email</label>
                                            <input type="email" name="update-email" class="form-control" id="update-email">
                                        </div>
                                        <div class="form-group">
                                            <label for="update-tel">Telephone</label>
                                            <input type="tel" name="update-tel" id="update-tel" class="form-control">
                                        </div>
                                        <label for="update-gender">Gender</label>
                                        <div class="radio">
                                            <label><input type="radio" name="update-gender" id="update-gender" value="male"> Male  </label>
                                            <label><input type="radio" name="update-gender" id="update-gender" value="female"> Female </label>
                                        </div>
                                        <label for="update-role">Role</label>
                                        <div class="radio">
                                            <label><input type="radio" name="update-role" id="update-role" value="admin"> Admin </label>
                                            <label><input type="radio" name="update-role" id="update-role" value="client"> Client </label>
                                        </div>
                                        <label for="update-role-priviledge">User Priviledges</label>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="update-role-priviledge-add" value="priv-add"> Add Items </label>
                                            <label><input type="checkbox" name="update-role-priviledge-edit" value="priv-edit"> Edit Items </label>
                                            <label><input type="checkbox" name="update-role-priviledge-delete" value="priv-del"> Delete Items </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4><strong>Address Details</strong></h4>
                                        <hr>
                                        <div class="form-group">
                                            <label for="update-addr-name">Address Name</label>
                                            <input type="text" name="update-addr-name" class="form-control" id="update-addr-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="update-address1">Address 1</label>
                                            <textarea name="update-address1" id="update-address1" class="form-control" rows="4" style="resize: none;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="update-address2">Address 2</label>
                                            <textarea name="update-address2" id="update-address2" class="form-control" rows="4" style="resize: none;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="update-city">City</label>
                                            <select name="update-city" id="update-city" class="form-control">
                                                <option value="nairobi">Nairobi</option>
                                                <option value="mombasa">Mombasa</option>
                                                <option value="kisumu">Kisumu</option>
                                                <option value="kakamega">Kakamega</option>
                                                <option value="eldoret">Eldoret</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="update-postcode">Postal Code</label>
                                            <input type="text" name="update-postcode" id="update-postcode" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="update-user-submit" class="btn btn-success pull-right">
                                                <span class="fa fa-edit"></span> Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer"></div>
            </div>
        </div>

    </div>
</div>
