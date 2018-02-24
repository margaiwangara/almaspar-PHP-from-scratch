<?php

if(session_status() == PHP_SESSION_NONE)
    //session set
    session_start();

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

$user_info_message = $ad_name = $ad = $name = $surname = $user_info_county = $ad_two = $user_cell = $post_code = FALSE;

if(isset($_SESSION['USER_ID']))
{
    $user_id = $_SESSION['USER_ID'];

    $user_info = mysqli_query($conn,"SELECT adress_name,adress,firstname,surname,city,user_tel,adress_two,postal_code FROM user_registration WHERE user_id='$user_id'") or trigger_error("User info query failed to execute");
    if(mysqli_num_rows($user_info) == 1)
    {
        $acquire_info = mysqli_fetch_assoc($user_info);

        $ad_name = $acquire_info['adress_name'];
        $ad = $acquire_info['adress'];
        $name = ucwords(strtolower($acquire_info['firstname']));
        $surname = ucwords(strtolower($acquire_info['surname']));
        $user_info_county = $acquire_info['city'];
        $ad_two = $acquire_info['adress_two'];
        $user_cell = $acquire_info['user_tel'];
        $post_code = $acquire_info['postal_code'];
    }

    //get county items
    $get_counties = mysqli_query($conn, "SELECT * FROM kenya_counties ORDER BY county_id ASC") or trigger_error("County acquisition query failed");
    if(mysqli_num_rows($get_counties) > 0)
    {
        while($kenya_counties = mysqli_fetch_assoc($get_counties))
        {
            $county_id [] = $kenya_counties['county_id'];
            $county_name [] = stripslashes(trim($kenya_counties['county_name']));

        }
    }

}
else
    $user_info_message = "Please login to view this page";
?>