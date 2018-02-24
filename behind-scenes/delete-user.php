<?php

if(session_status() == PHP_SESSION_NONE)
    //session start
    session_start();

if(isset($_SESSION['USER_EMAIL']))
{

    $user_email = $_SESSION['USER_EMAIL'];

    if(isset($_GET['ui_del']))
    {
        define('SAFE_WORD','INANA302527#');

        $encry_safeword = md5(SAFE_WORD);

        if(stripslashes(trim($encry_safeword)) == stripslashes(trim($_GET['ui_del'])))
        {
            $user_id = clean_input($_SESSION['USER_ID']);
        }
        else
        {
            $user_id = FALSE;
            echo "Invalid data provided";
        }

        if($user_id)
        {
            //go to db and delete everything related to the user_id
            $delete_accnt_query = mysqli_query($conn, "DELETE FROM user_registration t1,cart_basket t2,fav_items t3,newsletters t4,messages t5
                                  WHERE t1.user_id = '$user_id' AND t2.user_id = '$user_id' AND t3.user_id = '$user_id' AND t4.user_email = '$user_email'
                                  AND (t5.sender_id = '$user_id' OR t5.receiver_id = '$user_id')") or trigger_error("Account deletion query failed");
            if($delete_accnt_query)
            {
                //destroy session
                session_destroy();

                echo "Your accout has been deleted successfully";
            }
            else
                echo "Account Not Deleted. Please try again";
        }
    }
}



?>