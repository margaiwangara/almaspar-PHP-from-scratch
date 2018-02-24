<?php

if(session_status() == PHP_SESSION_NONE)
    //start session
    session_start();
//require db
require_once __DIR__.'/../../../include/connect-db.inc.php';

$login_message = FALSE;

if(isset($_POST['access-submit']))
{
    //get values from form
    //validate email field
    if(preg_match('%^[A-Za-z0-9._\%-]+\@[A-Za-z0-9.-]+\.[A-Za-z]{2,5}$%',stripslashes(trim($_POST['access-email']))))
        $login_email = clean_input($_POST['access-email']);
    else
    {
        $login_email = FALSE;
        $login_message = "Please enter a valid email";
    }

    //validate password field
    if(preg_match ('%^(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])\S{8,}\z%',stripslashes(trim($_POST['access-password']))))
    {
        $login_password = clean_input($_POST['access-password']);
    }
    else
    {
        $login_password = FALSE;
        $login_message = "Please enter a valid password";
    }

    if($login_email && $login_password)
    {
        //get id from database
        $login_query = mysqli_query($conn, "SELECT password,user_id FROM user_registration WHERE email = '$login_email' AND accnt_status = 'active'") or trigger_error("Login Failed");
        if(mysqli_num_rows($login_query) == 1)
        {
            //generate unique id for admin id
            $admin_id = openssl_digest(md5(uniqid(rand())),'sha512');

            //get pass
            $admin_data = mysqli_fetch_assoc($login_query);

            $pass_db = $admin_data['password'];

            if(password_verify($login_password,$pass_db))
            {
                //reset login attempts to 1
                mysqli_query($conn, "UPDATE login_attempts SET counter = '1' WHERE user_id = '$login_email'") or trigger_error("Login attempts failed");
                if(mysqli_affected_rows($conn) == 1)
                    $login_message = "Login attempts counter reset";
                //update db and input username if password is correct
                //input into db
                $add_admin = mysqli_query($conn, "UPDATE user_registration SET username = '$admin_id' WHERE email = '$login_email'") or trigger_error("Username update failed".mysqli_error($conn));
                if(mysqli_affected_rows($conn) == 1)
                {
                    //set cookie if remember me is check
                    if(isset($_POST['access-remember']))
                    {
                        setcookie('ADMIN_USERNAME',$admin_id,time()+(86400*7),"/");//expire in 7 days
                    }
                    //set sessions
                    $_SESSION['ADMIN_ID'] = $admin_data['user_id'];
                    $_SESSION['ADMIN_EMAIL'] = $login_email;

                }
                else
                    $login_message = "Username update failed";

            }
            else
            {
                //go to db and add attempt
                $get_attempt = mysqli_query($conn, "SELECT counter FROM login_attempts WHERE user_id = '$login_email'") or trigger_error("Attempts acquisition failed");
                if(mysqli_affected_rows($conn) == 0)
                {
                    //insert into db
                    $insert_attempt = mysqli_query($conn, "INSERT INTO login_attempts(user_id, counter) VALUES('$login_email','1')") or trigger_error("Attempts init failed");
                    if(mysqli_affected_rows($conn) == 1)
                    {
                        $login_message = "Invalid Username or Password";
                    }
                }
                else
                {
                    //get counter row
                    $attempts_data = mysqli_fetch_assoc($get_attempt);

                    $counter = $attempts_data['counter'];

                    if($counter == 5)
                    {
                        $login_message = "You have have reached the maximum number of password input attempts. Please try again after 60 seconds";

                        //reset to 0
                        mysqli_query($conn, "UPDATE user_registration SET accnt_status = 'inactive' WHERE email = '$login_email'") or trigger_error("Account block failed");
                        if(mysqli_affected_rows($conn) == 1)
                            $login_message = "You have entered the wrong password 5 times. For security reasons your account has been set to inactive. Please reset your password to regain access";

                    }
                    else
                    {
                        //add the counter then update to db
                        $counter = $counter + 1;

                        //update counter
                        $update_counter = mysqli_query($conn, "UPDATE login_attempts SET counter = '$counter' WHERE user_id = '$login_email'") or trigger_error("Counter update failed");
                        if(mysqli_affected_rows($conn) == 1)
                            $login_message = "Invalid Username or Password. You have ".(5-$counter)." trial attempts left";
                        else
                            $login_message = "Counter update failed";

                    }
                }

            }
        }
        else
            $login_message = "Either your email does not exist or your account has been deactivated";
    }
}
?>