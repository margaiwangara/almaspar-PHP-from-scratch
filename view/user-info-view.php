<?php

//include master file
include_once __DIR__."/../include/master.inc.php";

//redirect if not a member
if(!isset($_SESSION['USER_EMAIL']))
    header("Location: /../almas-parlour/index.php");

//include update page
include_once __DIR__."/../behind-scenes/account-details.php";

//include user-details page
include_once __DIR__."/../behind-scenes/user-details.php";


?>
<title>User Information - Account Details</title>
<div class="container" id="wrapper">

    <?php

        //include navbar
        include_once __DIR__."/../include/navbar.inc.php";
    ?>
<div class="main-content">
<div class="row">
<div class="col-md-12">
<h4 class="title"><span class="text"><strong>USER</strong> INFORMATION</span></h4>
<div class="col-md-3">
<?php
//include listitems
include_once __DIR__."/../include/user-info-sidebar.inc";
?>
</div>
<div class="col-md-9">
<div class="col-md-12">
    <form action="" method="post" autocomplete="off">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Account Details</h4>
                </div>
                <div class="panel-body">
                    <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="user_fname" id="fname_id" placeholder="First Name" class="form-control" value="<?php if(isset($_POST['user_fname'])) echo $_POST['user_fname'];else echo $name;?>"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="user_sname" id="sname_id" placeholder="Surname" class="form-control"  value="<?php if(isset($_POST['user_sname'])) echo $_POST['user_sname'];else echo $surname;?>"/>
                    </div>
                    <div class="form-group">
                        <input type="email" name="user_email" id="email_id" placeholder="someone@example.com" class="form-control" value="<?php if(isset($_POST['user_email'])) echo $_POST['user_email'];else if(isset($_SESSION['USER_EMAIL'])) echo $_SESSION['USER_EMAIL'];?>"/>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="user_tel" id="tel_id" placeholder="721-000-001" class="form-control" value="<?php if(isset($_POST['user_tel'])) echo $_POST['user_tel'];else echo $user_cell;?>"/>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="user_adname" id="adname_id" placeholder="Address Name" class="form-control" value="<?php if(isset($_POST['user_adname'])) echo $_POST['user_adname'];else echo $ad_name;?>"/>
                        </div>
                        <div class="form-group">
                            <textarea name="user_address1" id="address1_id" placeholder="Address 1" rows="3" class="form-control" style="resize: none;" required><?php if(isset($_POST['user_address1'])) echo $_POST['user_address1'];else echo $ad;?></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="user_address2" id="address2_id" placeholder="Address 2" rows="3" class="form-control" style="resize: none;"><?php if(isset($_POST['user_address2'])) echo $_POST['user_address2'];else echo $ad_two;?></textarea>
                        </div>
                        <div class="form-group">
                            <select name="user_county" id="county_id" class="form-control">
                                <?php foreach($county_name as $key=>$value):?>
                                <option value="<?php echo $value;?>" <?php if(isset($_POST['user_county']) && $_POST['user_county'] == $value){?>selected<?php }else if($value == $user_info_county){?>selected<?php }?>><?php echo $value;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="user_postcode" id="postcode_id" placeholder="Postal Code" class="form-control" required value="<?php if(isset($_POST['user_postcode'])) echo $_POST['user_postcode'];else echo $post_code?>"/>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" name="user_infosubmit" id="infosubmit_id" class="btn btn-primary">Submit</button>
                            <span class="user_info_mess"><?php ?></span>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <h5 style="color: red;"><?php echo $accnt_up_info;?></h5>
                </div>
            </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php

//include footer
include_once __DIR__.'/../include/footer-page.inc.php';
?>
