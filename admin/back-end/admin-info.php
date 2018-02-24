<?php
if(session_status() == PHP_SESSION_NONE)
    //set session
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

if(isset($_COOKIE['ADMIN_USERNAME']) || isset($_SESSION['ADMIN_ID']))
{
    $admin_username = $_COOKIE['ADMIN_USERNAME'];
    echo  $admin_username;

    if(isset($_SESSION['ADMIN_ID']))
        $user_id = $_SESSION['ADMIN_ID'];

    //get data from db
    $user_data = mysqli_query($conn, "SELECT * FROM user_registration WHERE username = '$admin_username' OR user_id = '$user_id'") or trigger_error("User data not found");
    if(mysqli_num_rows($user_data) == 1)
    {
        $admin_info = mysqli_fetch_assoc($user_data);

        $admin_id = $admin_info['user_id'];
        $admin_fname = $admin_info['firstname'];
        $admin_surname = $admin_info['surname'];
        $admin_email = $admin_info['email'];

        if(empty($admin_fname) || empty($admin_surname))
            $admin_name = substr($admin_email,0,strpos($admin_email,'@'));
        else
            $admin_name = $admin_fname." ".$admin_surname;
    }
}

?>