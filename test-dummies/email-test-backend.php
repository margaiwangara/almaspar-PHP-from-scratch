<?php

date_default_timezone_set('Europe/Istanbul');
$date = date('Y-m-d H:i:s');

echo $date;
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    //get input from the user
    $to = $_GET['email_to'];
    $subject = $_GET['email_sub'];
    $message = $_GET['email_txtarea'];

    //send email
    if(mail($to,$subject,$message))
        echo "Email sent";
    else
        echo "Email not sent";
}

?>