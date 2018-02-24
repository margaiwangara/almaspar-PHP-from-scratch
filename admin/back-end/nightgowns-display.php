<?php

if(session_status() == PHP_SESSION_NONE)
    //set session
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

$nightgown_message = FALSE;
$nightgown_id = FALSE;


$prod_query = mysqli_query($conn, "SELECT * FROM items_list WHERE type = 'nightgown' ORDER BY upload_date DESC") or trigger_error("Dress items not acquired");
if (mysqli_num_rows($prod_query) > 0) {
    //get all data
    while ($prod_cont = mysqli_fetch_assoc($prod_query)) {
        $nightgown_id [] = $prod_cont['item_id'];
        $nightgown_image [] = "/../almas-parlour/".$prod_cont['image_path'];
        $nightgown_code [] = $prod_cont['item_code'];
        $nightgown_name [] = $prod_cont['item_name'];
        $nightgown_type [] = $prod_cont['type'];
        $nightgown_price [] = $prod_cont['item_price'];
        $nightgown_quantity [] = $prod_cont['item_quantity'];
        $nightgown_size [] = $prod_cont['item_size'];
        $nightgown_color [] = $prod_cont['color'];
    }
} else
    $nightgown_message = "No items to display";


?>