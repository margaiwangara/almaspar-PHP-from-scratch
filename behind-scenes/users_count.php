<?php

if(session_status() == PHP_SESSION_NONE)
    //set session
    session_start();

//connect db
require_once __DIR__.'/../include/connect-db.inc.php';

//initialize variable
$count_message = FALSE;
$user_total = $new_members_count = 0;
$user_name = FALSE;

//query
$get_users = mysqli_query($conn, "SELECT * FROM user_registration ORDER BY creation_date ASC") or trigger_error("Users count not acquired");
if(mysqli_num_rows($get_users) > 0)
{
    //get no of users
    $user_total = mysqli_num_rows($get_users);

    //get time difference with now
    $time_difference = mysqli_query($conn, "SELECT firstname,surname,email,user_gender,TIMESTAMPDIFF(DAY,creation_date,NOW()) time_diff FROM user_registration WHERE TIMESTAMPDIFF(DAY,creation_date,NOW())< 7 ORDER BY creation_date DESC LIMIT 8") or trigger_error("Timestamp diff not acquired ");
    if(mysqli_num_rows($time_difference) > 0)
    {
        //latest count
        $new_members_count = mysqli_num_rows($time_difference);

        //get the data if users registered within the last 7 days
        while($latest_users = mysqli_fetch_assoc($time_difference))
        {
            if(empty($latest_users['firstname'] && empty($latest_users['surname'])))
                $user_name [] = substr($latest_users['email'],0,strpos($latest_users['email'],'@'));
            //get user information
            $username [] = $latest_users['firstname']." ".$latest_users['surname'];
            $gender [] = $latest_users['user_gender'];

            if($latest_users['time_diff'] == 0)
                $time_diff [] = "Today";
            else if($latest_users['time_diff'] == 1)
                $time_diff [] = "Yesterday";
            else
                $time_diff [] = $latest_users['time_diff']." days ago";

        }

    }

    //get latest users reqistered based on the last 7 days

}


?>