<?php

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

//initialize array
$display_id = FALSE;

$items_query = mysqli_query($conn, "SELECT *,image_path,item_id,item_name,item_price,type,upload_date FROM items_list WHERE upload_date < now() ORDER BY upload_date DESC") or trigger_error("Query Failed");
if(mysqli_affected_rows($conn) > 0)
{

//assign values to variable
    $time = 0;
    $nowtime = time();

    //get data from db
    while($items_display = mysqli_fetch_assoc($items_query))
    {
        $time = strtotime($items_display['upload_date']);
        $time = $nowtime - $time;
        $newtime = 0;

        $display_id [] = $items_display['item_id'];
        $display_image [] = "../".$items_display['image_path'];
        $display_name [] = $items_display['item_name'];
        $display_price [] = $items_display['item_price'];
        $display_type [] = $items_display['type'];

        if(($time/60) < 1 && ($time/3600) < 1 && ((($time/3600)/24) < 1))
            $newtime = floor(($time/60))." seconds ago";
        else if(($time/60) > 1 && ($time/3600) < 1)
            $newtime = floor(($time/60))." minutes ago";
        else if(($time/60) > 1 && ($time/3600) > 1 && (($time/3600)/24) < 1)
            $newtime = floor(($time/3600))." hours ago";
        else
            $newtime = floor((($time/3600)/24))." days ago";

        $display_date [] = $newtime;

    }

}



?>