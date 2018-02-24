<?php

if(session_status() == PHP_SESSION_NONE)
    //set session
    session_start();

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

//date message
$accnt_up_info = $name = $surname = $user_tel = $address1 = $address2 = $address_name = $email = $county_update = $pc = FALSE;
if(isset($_SESSION['USER_ID']))
{

    //user_id
    $user_id = clean_input($_SESSION['USER_ID']);

    if(isset($_POST['user_infosubmit'])) {

        /**********************************
         * in-depth validation starts here
         ***********************************/
        //user first name
        if (preg_match('%^[A-Za-z\.\' \-]{2,20}$%', stripslashes(trim($_POST['user_fname'])))) {
            $name = clean_input($_POST['user_fname']);
        } else {
            $name = FALSE;
            $accnt_up_info = "Please input a valid first name";
        }

        //user surname
        if (preg_match('%^[A-Za-z\.\' \-]{2,30}$%', stripslashes(trim($_POST['user_sname'])))) {
            $surname = clean_input($_POST['user_sname']);
        } else {
            $surname = FALSE;
            $accnt_up_info = "Please input a valid last name";
        }

        //user county
        if (preg_match('%^[A-Za-z\.\' \-]{2,40}$%', stripslashes(trim($_POST['user_county'])))) {
            $county_update = clean_input($_POST['user_county']);
        } else {
            $county_update = FALSE;
            $accnt_up_info = "Please input a county name";
        }

        //check postal code
        if (preg_match('%^[0-9]{5}$%', stripslashes(trim($_POST['user_postcode'])))) {
            $pc = clean_input($_POST['user_postcode']);
        } else {
            $pc = FALSE;
            $accnt_up_info = "Invalid postal code data input";
        }

        // Check for an address name
        if (preg_match('%^[A-Za-z0-9\.\' \-]{5,30}$%', stripslashes(trim($_POST['user_adname'])))) {
            $address_name = clean_input($_POST['user_adname']);
        } else {
            $address_name = FALSE;
            $accnt_up_info = "Invalid address data input";
        }

        // Check an address1
        if (preg_match('%^[A-Za-z0-9\.\' \-]{5,30}$%', stripslashes(trim($_POST['user_address1'])))) {
            $address1 = clean_input($_POST['user_address1']);
        } else {
            $address1 = FALSE;
            $accnt_up_info = "Invalid address 1 data input";
        }

        // Check an address2
        if (preg_match('%^[A-Za-z0-9\.\' \-]{5,30}$%', stripslashes(trim($_POST['user_address2'])))) {
            $address2 = clean_input($_POST['user_address2']);
        } else {
            $address2 = FALSE;
            $accnt_up_info = "Invalid address 2 data input";
        }

        // Check for a phone number.
        // ‘)”;delete from users where user_id=”9″;
        if (preg_match('%^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$%', stripslashes(trim($_POST['user_tel'])))) {
            $user_tel = clean_input($_POST['user_tel']);
        } else {
            $user_tel = FALSE;
            $accnt_up_info = "Invalid mobile number input";
        }

        //validate email field
        if(preg_match('%^[A-Za-z0-9._\%-]+\@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$%',stripslashes(trim($_POST['user_email']))))
            $email = clean_input($_POST['user_email']);
        else
        {
            $email = FALSE;
            $accnt_up_info = "Please enter a valid email";
        }

        if($email && $address1 && $pc) {
            //update db
            $update_user = mysqli_query($conn, "UPDATE user_registration SET email = '$email',user_tel = '$user_tel',
                        adress = '$address1',adress_two = '$address2',postal_code = '$pc',adress_name = '$address_name',
                        firstname = '$name',surname = '$surname',city = '$county_update' WHERE user_id = '$user_id'") or trigger_error("Account info query failed");
            if (mysqli_affected_rows($conn) == 1)
                $accnt_up_info = "<span style='color:green'>Account Details Updated</span>";
            else
                $accnt_up_info = "Account Update Failed";
        }
    }
}


?>