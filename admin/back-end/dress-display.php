<?php

if(session_status() == PHP_SESSION_NONE)
    //set session
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

$dress_message = FALSE;
$dress_id = FALSE;


$prod_query = mysqli_query($conn, "SELECT * FROM items_list WHERE type = 'dress' ORDER BY upload_date DESC") or trigger_error("Dress items not acquired");
if (mysqli_num_rows($prod_query) > 0) {
    //get all data
    while ($prod_cont = mysqli_fetch_assoc($prod_query)) {
        $dress_id [] = $prod_cont['item_id'];
        $dress_image [] = "/../almas-parlour/".$prod_cont['image_path'];
        $dress_code [] = $prod_cont['item_code'];
        $dress_name [] = $prod_cont['item_name'];
        $dress_type [] = $prod_cont['type'];
        $dress_price [] = $prod_cont['item_price'];
        $dress_quantity [] = $prod_cont['item_quantity'];
        $dress_size [] = $prod_cont['item_size'];
        $dress_color [] = $prod_cont['color'];
    }
} else
    $disp_message = "No items to display";


?>