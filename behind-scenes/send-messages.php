<?php

//connect db
require_once __DIR__.'/../include/connect-db.inc.php';


if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if(isset($_SESSION['USER_EMAIL']))
    {
        $sender_id = $_SESSION['USER_EMAIL'];
        $message = clean_input($_GET['user_message']);
        $msg_status = 'unread';

        //send message as email to admin
        //mail('admin','user-matters',$message);

        //get user_id
        $get_user_id = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$sender_id'");
        if(mysqli_num_rows($get_user_id) > 0)
        {
            //get id
            $id_fetch = mysqli_fetch_assoc($get_user_id);
            $sender_id = $id_fetch['user_id'];

            //get admin id
            $get_admin_id = mysqli_query($conn, "SELECT * FROM admin_info");
            if(mysqli_num_rows($get_user_id) > 0)
            {
                $admin_fetch = mysqli_fetch_assoc($get_admin_id);
                $receiver_id = $admin_fetch['admin_id'];

                //send message
                $send_message = mysqli_query($conn, "INSERT INTO messages(sender_id, receiver_id, message, msg_status) VALUES ('$sender_id','$receiver_id','$message','$msg_status')");
                if($send_message)
                    echo "<script>alert('Message sent successfully');setTimeout(function(){window.location.replace('/../almas-parlour/view/contact-us.php');},2000);</script>";
                else
                    echo "<script>alert('Message not sent');setTimeout(function(){window.location.replace('/../almas-parlour/view/contact-us.php');},2000)</script>";
            }


        }
    }
    else
        echo "<script>alert('You are not logged in. Please log in to send message');setTimeout(function(){window.location.replace('/../almas-parlour/view/contact-us.php')},2000);</script>";





}


?>