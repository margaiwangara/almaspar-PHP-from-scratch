<?php

if(session_status() == PHP_SESSION_NONE)
    //start session
    session_start();

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

//initialize to avoid error
$ms_id = FALSE;

$ms_query = mysqli_query($conn, "SELECT cart_basket.item_id, items_list.image_path,items_list.type,items_list.item_name,items_list.item_price FROM items_list
              INNER JOIN cart_basket ON cart_basket.item_id = items_list.item_id WHERE cart_basket.status = 'sold' ORDER BY cart_basket.quantity DESC LIMIT 4") or trigger_error("Most sold items not acquired");
if(mysqli_num_rows($ms_query) > 0)
{
    while($ms_items = mysqli_fetch_assoc($ms_query))
    {
        $ms_id [] = $ms_items['item_id'];
        $ms_image [] = "/../almas-parlour/".$ms_items['image_path'];
        $ms_name [] = $ms_items['item_name'];
        $ms_type []= $ms_items['type'];
        $ms_price [] = $ms_items['item_price'];
    }
}



?>