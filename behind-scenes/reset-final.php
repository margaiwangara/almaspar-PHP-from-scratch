<?php

//get db
require_once __DIR__.'/../include/connect-db.inc.php';

$recfinal_message = $fuid = FALSE;

if(isset($_POST['recover_submit']))
{
    if(isset($_GET['rid']))
    {
        //store values
        if(preg_match('%^[1-9][0-9]{0,10}$%',stripslashes(trim($_GET['rid']))))
        {
            $fuid = clean_input($_GET['rid']);
        }
        else
        {
            $fuid = FALSE;
            $recfinal_message = "Invalid data input";

        }
    }

    if($fuid)
    {

        //validate password field
        if(preg_match ('%^(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])\S{8,}\z%',stripslashes(trim($_POST['recover_pass']))))
        {
            if($_POST['recover_pass'] == $_POST['recover_cpass'])
                $password = clean_input($_POST['recover_pass']);
            else
            {
                $password = FALSE;
                $recfinal_message = "Passwords do not match";
            }

        }
        else
        {
            $password = FALSE;
            $recfinal_message = "Please enter a valid password";
        }

        if($password)
        {
            //encrypt password
            $password = password_hash($password,PASSWORD_DEFAULT);

            //update password
            $update_pass_query = mysqli_query($conn, "UPDATE user_registration SET password = '$password',pass_reset_code = '0',pass_reset_confirmed = '1' WHERE user_id = '$fuid'") or trigger_error("Invalid password");
            if(mysqli_affected_rows($conn) == 1)
            {
                header("Refresh: 2;url = /../almas-parlour/account-creation.php");

                //redirect to login page
                $recfinal_message = "Password reset successful. Redirecting...";
            }
            else
                $recfinal_message = "Password reset failed due to technical difficulties";
        }
    }
}


?>