<?php

//session present
if(session_status() == PHP_SESSION_NONE)
    session_start();

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

//total favourites initialization
$total_fav_count = 0;
$liked_id = $total_fav_message = FALSE;


if(isset($_SESSION['USER_EMAIL']))
{

    if(isset($_SESSION['USER_ID']))
    {
        if(preg_match('%^[1-9][0-9]{0,10}$%',stripslashes(trim($_SESSION['USER_ID']))))
        {
            $fav_user_id = clean_input($_SESSION['USER_ID']);
        }
        else
        {
            $fav_user_id = FALSE;
            $total_fav_message = "Invalid data entry";
        }
    }

    $set_time = 0;
    $currnt_time = time();

    //run query
    $fav_query = mysqli_query($conn, "SELECT *,fav_items.item_id,items_list.item_name,items_list.image_path,items_list.item_price, items_list.type, fav_items.fav_date FROM fav_items 
                        INNER JOIN items_list ON fav_items.item_id = items_list.item_id WHERE fav_items.user_id = '$fav_user_id' ORDER BY fav_date DESC")
                        or trigger_error("Favourites acquisition error");
    if(mysqli_affected_rows($conn) > 0)
    {
        while($liked_coll = mysqli_fetch_assoc($fav_query))
        {
            $set_time = strtotime($liked_coll['fav_date']);
            $set_time = $currnt_time - $set_time;
            $time_new = 0;

            $liked_id [] = $liked_coll['item_id'];
            $liked_image [] = "/../almas-parlour/".$liked_coll['image_path'];
            $liked_name [] = $liked_coll['item_name'];
            $liked_type [] = $liked_coll['type'];
            $liked_price [] = $liked_coll['item_price'];

            //date displayer - duration calculator
            if(($set_time/60) < 1 && ($set_time/3600) < 1 && ((($set_time/3600)/24) < 1))
                $time_new = floor(($set_time/60))." seconds ago";
            else if(($set_time/60) > 1 && ($set_time/3600) < 1)
                $time_new = floor(($set_time/60))." minutes ago";
            else if(($set_time/60) > 1 && ($set_time/3600) > 1 && (($set_time/3600)/24) < 1)
                $time_new = floor(($set_time/3600))." hours ago";
            else
                $time_new = floor((($set_time/3600)/24))." days ago";

            $liked_date [] = $time_new;
        }
        $total_fav_count = mysqli_num_rows($fav_query);
        $_SESSION['FAVOURITES'] = $total_fav_count;
    }
   // echo json_encode(array('fav_total'=>$total_fav_count));
}

?>