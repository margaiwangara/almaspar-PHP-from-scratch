<?php

/*
 * Numerous adjustments must be done on this page in upcoming update, too much repetitiveness needs to be put on hold
 * despite of it being fun, it is just not a good coding practise
 * Reduce the acquisition of information to only one or two select statements. Since it is included directly into the
 * page, i can user if statements to differentiate between the item type
 * */
//include connect db file
require_once __DIR__ . '/../include/connect-db.inc.php';

//avilability checker
$featured_id = $new_arrivals_id = FALSE;

//get new arrivals
$new_arrivals = mysqli_query($conn, 'SELECT image_path,item_name,item_price,type,item_id FROM items_list ORDER BY upload_date DESC LIMIT 8') or trigger_error("New Arrivals Query Failed");
if(mysqli_num_rows($new_arrivals) == 8)
{
    while($get_new_arrivals = mysqli_fetch_assoc($new_arrivals))
    {
        $new_arrivals_image [] = $get_new_arrivals['image_path'];
        $new_arrivals_name [] = $get_new_arrivals['item_name'];
        $new_arrivals_price [] = $get_new_arrivals['item_price'];
        $new_arrivals_id [] = $get_new_arrivals['item_id'];
        $new_arrivals_type [] = $get_new_arrivals['type'];
    }
    $index_checker = 1;
}

$featured_products = mysqli_query($conn, "SELECT image_path,item_name,item_price,type,item_id FROM items_list ORDER  BY RAND() LIMIT 8") or trigger_error("Feature Query Failed");
if(mysqli_num_rows($featured_products) == 8)
{
    //acquire items
    while($get_featured = mysqli_fetch_assoc($featured_products))
    {
        $featured_image [] = $get_featured['image_path'];
        $featured_name [] = $get_featured['item_name'];
        $featured_price [] = $get_featured['item_price'];
        $featured_id [] = $get_featured['item_id'];
        $featured_type [] = $get_featured['type'];
    }
}

?>