<?php

if(session_status() == PHP_SESSION_NONE)
    //set session
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

$cosmetics_message = FALSE;
$cosmetics_id = FALSE;


$prod_query = mysqli_query($conn, "SELECT * FROM items_list WHERE type = 'cosmetics' ORDER BY upload_date DESC") or trigger_error("Dress items not acquired");
if (mysqli_num_rows($prod_query) > 0) {
    //get all data
    while ($prod_cont = mysqli_fetch_assoc($prod_query)) {
        $cosmetics_id [] = $prod_cont['item_id'];
        $cosmetics_image [] = "/../almas-parlour/".$prod_cont['image_path'];
        $cosmetics_code [] = $prod_cont['item_code'];
        $cosmetics_name [] = $prod_cont['item_name'];
        $cosmetics_type [] = $prod_cont['type'];
        $cosmetics_price [] = $prod_cont['item_price'];
        $cosmetics_quantity [] = $prod_cont['item_quantity'];
        $cosmetics_size [] = $prod_cont['item_size'];
        $cosmetics_color [] = $prod_cont['color'];
    }
} else
    $cosmetics_message = "No items to display";


?>