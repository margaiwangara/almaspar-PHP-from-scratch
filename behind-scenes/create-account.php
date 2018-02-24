<?php

require_once __DIR__.'/../include/connect-db.inc.php';

//initialize error variable
$reg_message = FALSE;
if(isset($_POST['register_submit']))
{
    //INPUT VALIDATION
    //validate email field
    if(preg_match('%^[A-Za-z0-9._\%-]+\@[A-Za-z0-9.-]+\.[A-Za-z]{2,5}$%',stripslashes(trim($_POST['register_email']))))
        $email = clean_input($_POST['register_email']);
    else
    {
        $email = FALSE;
        $reg_message = "Please enter a valid email";
    }

    //validate password field
    if(preg_match ('%^(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])\S{8,}\z%',stripslashes(trim($_POST['register_password']))))
    {
        if($_POST['register_password'] == $_POST['register_cpassword'])
            $password = clean_input($_POST['register_password']);
        else
        {
            $password = FALSE;
            $reg_message = "Passwords do not match";
        }

    }
    else
    {
        $password = FALSE;
        $reg_message = "Please enter a valid password";
    }

    if(isset($_POST['terms_check']))
    {
        $accept_terms = clean_input($_POST['terms_check']);
    }else
    {
        $accept_terms = FALSE;
        $reg_message = "You must check the Terms And Conditions to continue";
    }

    //confirm no errors have been encountered
    if($email && $password && $accept_terms)
    {
        //check if username is available
        $result = mysqli_query($conn, "SELECT email FROM user_registration WHERE email = '$email'") or trigger_error("Email already exists");
        if(mysqli_num_rows($result) == 0)//available
        {
            //create a confirmation key and activation code
            $confirm_code = md5(uniqid(rand(),true));

            //encrypt password
            $password = password_hash($password,PASSWORD_DEFAULT);

            //insert values in db in a random order than appearance on form
            $insert_data = mysqli_query($conn, "INSERT INTO user_registration(password,email,confirm_code,terms_and_conditions,confirmed) VALUES('$password','$email','$confirm_code','$accept_terms','0')") or trigger_error("Registration failed");
            if(mysqli_affected_rows($conn) == 1)//execution successful
            {
                //get user information and write message
                $to = $email;
                $from = "no-reply@almasparlour.co.ke\r\n";
                $subject = "Account Confirmation";
                $access_link = "http://www.almasparlour.co.ke/almas-parlour/behind-scenes/confirm-account.php?id=".mysqli_insert_id($conn)."&a=$confirm_code";
                $body = "Dear ".substr($email,0,strpos($email,'@')).",\r\n\nWelcome to Almas Parlour\r\n\nPlease click on this link to activate your account\r\n\n".$access_link;

                //headers
                $headers = 'MIME Version: 1.0'."\r\n";
                $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                //additional headers
                $headers = 'From: Do Not Reply <no-reply@almasparlour.co.ke>'."\r\n";


                //write to file
                $filename = "confirmation-emails.html";
                $confirmation = fopen($filename,"a");

                if(fwrite($confirmation,"To: ".$to."<br>Subject: ".$subject."<br>".$body."<br>From: ".$from))
                    $reg_message = "Email sent successful";
                else
                    $reg_message = "Email failed to send";
                fclose($confirmation);

                mail($to,$subject,$body,"From:".$from);

                //Inform user to activate account
                $reg_message = "Registration Successful. Please check your email to activate your account";
                //exit();
            }else
                $reg_message = "Registration failed due a system error. Apologies for any inconvinience";

        }else
            $reg_message = "Email already exists";

    }

    //close db connection
    //mysqli_close($conn);
}


?>

