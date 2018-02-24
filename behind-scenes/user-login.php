<?php

//require db
if(session_status() == PHP_SESSION_NONE)
    //session start
    session_start();

$login_message = FALSE;
if(isset($_POST['login_submit']))
{
    //validate input
    //validate email field
    if(preg_match('%^[A-Za-z0-9._\%-]+\@[A-Za-z0-9.-]+\.[A-Za-z]{2,5}$%',stripslashes(trim($_POST['login_email']))))
        $login_email = clean_input($_POST['login_email']);
    else
    {
        $login_email = FALSE;
        $login_message = "Please enter a valid email";
    }

    //validate password field
    if(preg_match ('%^(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])\S{8,}\z%',stripslashes(trim($_POST['login_password']))))
    {
        $login_password = clean_input($_POST['login_password']);
    }
    else
    {
        $login_password = FALSE;
        $login_message = "Please enter a valid password";
    }

    if($login_email && $login_password)
    {

        //confirm if user account is activated
        $account_active = mysqli_query($conn, "SELECT user_id,email,password FROM user_registration WHERE email = '$login_email' AND confirm_code = '0' AND confirmed = '1'") or trigger_error("User does not exist");
        if(mysqli_affected_rows($conn) == 1)
        {
            //get password from db
            $user_details = mysqli_fetch_assoc($account_active);
            if(password_verify($login_password,$user_details['password']))
            {

                //set sessions
                $_SESSION['USER_EMAIL'] = $login_email;
                $_SESSION['USER_ID'] = $user_details['user_id'];

                //redirect with js
                header("Location: index.php");

            }
            else
                $login_message = "Invalid email or password";

        }
        else
            $login_message = "Please activate your account";
    }
}


?>