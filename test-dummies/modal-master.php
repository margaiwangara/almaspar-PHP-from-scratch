<div id="edit-account" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Account Details</h3>
            </div>
            <div class="modal-body">
                <form action="" method="get" id="update-form">
                    <div class="form-group">
                        <input type="text" placeholder="Address Name" class="form-control ad-name" name="addr_name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control name" name="user_name">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Surname" class="form-control surname" name="user_surname">
                    </div>
                    <div class="form-group">
                        <input type="Email" placeholder="someone@example.com" class="form-control" name="user_email" value="<?php if($user_email) echo $user_email;?>" readonly>
                    </div>
                    <div class="form-group">
                        <select class="form-control user_cities" name="user_city">
                            <option value="Nairobi"selected>Nairobi</option>
                            <option value="Mombasa">Mombasa</option>
                            <option value="Kisumu">Kisumu</option>
                            <option value="Eldoret">Eldoret</option>
                            <option value="Nakuru">Nakuru</option>
                            <option value="Kakamega">Kakamega</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control addr" rows="5" placeholder="Address" style="resize: none;" name="user_addr"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="update-submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>