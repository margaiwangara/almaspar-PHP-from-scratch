<?php
if(session_status() == PHP_SESSION_NONE)
    //session start
    session_start();

//include db
require_once __DIR__.'/../../../include/connect-db.inc.php';

$recover_pass_mess = FALSE;

if(isset($_POST['reset-submit']))
{
    //validate email field
    if(preg_match('%^[A-Za-z0-9._\%-]+\@[A-Za-z0-9.-]+\.[A-Za-z]{2,5}$%',stripslashes(trim($_POST['reset-email']))))
        $recovery_email = clean_input($_POST['reset-email']);
    else
    {
        $recovery_email = FALSE;
        $recover_pass_mess = "Please enter a valid email";
    }

    if($recovery_email)
    {

        //check in db
        $email_exist_query = mysqli_query($conn, "SELECT email,user_id FROM user_registration WHERE email = '$recovery_email'") or trigger_error("Email does not exist");
        if(mysqli_affected_rows($conn) == 1)
        {
            //get user id
            $user_data = mysqli_fetch_assoc($email_exist_query);
            $user_id = $user_data['user_id'];

            //create a reset key and activation code
            $pass_reset_key = md5(uniqid(rand(),true));

            //store in db
            $store_key = mysqli_query($conn, "UPDATE user_registration SET pass_reset_code = '$pass_reset_key',pass_reset_confirmed = '0' WHERE email = '$recovery_email'") or trigger_error("Reset update failed");
            if(mysqli_affected_rows($conn) == 1)
            {

                //get user information and write message
                $to = $recovery_email;
                $from = "no-reply@almasparlour.co.ke\r\n";
                $subject = "Password Reset";
                $access_link = "http://www.almasparlour.co.ke/almas-parlour/admin/auth/view/pass-reset.php?rid=".$user_id."&ra=$pass_reset_key";
                $body = "Dear ".substr($recovery_email,0,strpos($recovery_email,'@')).",\r\n\nPlease click on this link to recover your password\r\n\n".$access_link;

                //headers
                $headers = 'MIME Version: 1.0'."\r\n";
                $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                //additional headers
                $headers = 'From: Do Not Reply <no-reply@almasparlour.co.ke>'."\r\n";


                //write to file
                $filename = "pass-recovery.html";
                $confirmation = fopen($filename,"a");

                //write to file
                fwrite($confirmation,"To: ".$to."<br>Subject: ".$subject."<br>".$body."<br>From: ".$from);
                //close file
                fclose($confirmation);

                mail($to,$subject,$body,"From:".$from);

                //Inform user to check email
                $recover_pass_mess = "Please check your email to reset your password";
            }
        }
        else
            $recover_pass_mess = "Email does not exist";
    }
}

?>