<?php

//include db
include_once __DIR__ . '/../include/connect-db.inc.php';

$confirm_message = $confirm_code = $confirm_id = FALSE;
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if(isset($_GET['a']))
    {
        $confirm_code = clean_input($_GET['a']);
    }

    if(isset($_GET['id']))
    {
        if(preg_match('%^[1-9][0-9]{0,10}$%',stripslashes(trim($_GET['id']))))
        {
            $confirm_id = clean_input($_GET['id']);
        }
        else
        {
            $confirm_id = FALSE;
            echo "Invalid data input";
        }
    }


    if($confirm_code && $confirm_id)
    {
        //get data from db and confirm code
        $get_code = mysqli_query($conn, "SELECT confirm_code,confirmed FROM user_registration WHERE user_id = '$confirm_id' AND confirm_code = '$confirm_code' AND confirmed = '0'") or trigger_error("Invalid data input");
        if (mysqli_affected_rows($conn) == 1)
        {
            $get_data = mysqli_fetch_assoc($get_code);

            //update the rows in the db
            $update_status = mysqli_query($conn, "UPDATE user_registration SET confirmed='1' , confirm_code='0' WHERE user_id='$confirm_id'") or trigger_error("Activation confirmation failed");
            if (mysqli_affected_rows($conn) == 1)
            {
                echo "<div style='font-size: 35px;color: #004085;font-family: Cambria;'>Activation Successful.Redirecting to Login Page</div>";

                //redirect to login page
                header("Refresh: 2;url= /../../almas-parlour/view/account-creation.php");
            }
            else
                echo "<div style='font-size: 35px;color: red;font-family: Cambria;'>Activation Failed.</div>";


        } else
            echo "<div style='font-size: 35px;color: red;font-family: Cambria;'>Your link has expired</div>";
    }
    else
        echo "<div style='font-size: 35px;color: red;font-family: Cambria;'>Nothing to display</div>";

}


?>