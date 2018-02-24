<?php

if(session_status() == PHP_SESSION_NONE)
    //set session
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

$jumpsuits_message = FALSE;
$jumpsuits_id = FALSE;


$prod_query = mysqli_query($conn, "SELECT * FROM items_list WHERE type = 'jumpsuits' ORDER BY upload_date DESC") or trigger_error("Dress items not acquired");
if (mysqli_num_rows($prod_query) > 0) {
    //get all data
    while ($prod_cont = mysqli_fetch_assoc($prod_query)) {
        $jumpsuits_id [] = $prod_cont['item_id'];
        $jumpsuits_image [] = "/../almas-parlour/".$prod_cont['image_path'];
        $jumpsuits_code [] = $prod_cont['item_code'];
        $jumpsuits_name [] = $prod_cont['item_name'];
        $jumpsuits_type [] = $prod_cont['type'];
        $jumpsuits_price [] = $prod_cont['item_price'];
        $jumpsuits_quantity [] = $prod_cont['item_quantity'];
        $jumpsuits_size [] = $prod_cont['item_size'];
        $jumpsuits_color [] = $prod_cont['color'];
    }
} else
    $jumpsuits_message = "No items to display";


?>