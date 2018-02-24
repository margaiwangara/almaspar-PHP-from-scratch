<?php

if(session_status() == PHP_SESSION_NONE)
    //start session
    session_start();

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

$change_pass_message = FALSE;
if(isset($_SESSION['USER_EMAIL']))
{

    if(isset($_POST['passchange_submit'])) {

        //user_id
        $user_id = $_SESSION['USER_ID'];

        //get old password
        if (preg_match('%^(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])\S{8,}\z%', stripslashes(trim($_POST['old_password']))))
            $old_password = clean_input($_POST['old_password']);
        else {
            $old_password = FALSE;
            $change_pass_message = "Please input a valid password";

        }

        //new password input
        if (preg_match('%^(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])\S{8,}\z%', stripslashes(trim($_POST['new_password'])))) {
            if ($_POST['new_password'] == $_POST['cnew_password'])
                $new_password = clean_input($_POST['new_password']);
            else {
                $new_password = FALSE;
                $change_pass_message = "Please input a valid password";
            }
        }

        if ($old_password && $new_password) {

            //get old password from db
            $old_pass_query = mysqli_query($conn, "SELECT password FROM user_registration WHERE user_id = '$user_id'") or trigger_error("Query failed to obtain old password");
            if (mysqli_num_rows($old_pass_query) == 1) {
                //get password
                $prev_pass_fetch = mysqli_fetch_array($old_pass_query);

                $prev_password = $prev_pass_fetch['password'];

                //verify authenticity
                if (password_verify($old_password, $prev_password)) {
                    //encrypt password
                    $new_password = password_hash($new_password, PASSWORD_DEFAULT);

                    //update the new password
                    $update_pass_query = mysqli_query($conn, "UPDATE user_registration SET password = '$new_password' WHERE user_id = '$user_id'") or trigger_error("Update password query failed");
                    if (mysqli_affected_rows($conn) == 1) {
                        $change_pass_message = "<span style='color: green'>Password changed successfully</span>";
                    } else
                        $change_pass_message = "Password change failed due a system error. Please try again later";
                } else
                    $change_pass_message = "Incorrect old password input";


            }
        }
    }

}



?>