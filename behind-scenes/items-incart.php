<?php

if(session_status() == PHP_SESSION_NONE)
    //session start
    session_start();

//call db
require_once __DIR__.'/../include/connect-db.inc.php';

$items_total = 0;
if(isset($_SESSION['USER_EMAIL']))
{
    //get user id
    $user_id = $_SESSION['USER_ID'];

    //go to db and get the number of items
    $items_in_cart = mysqli_query($conn, "SELECT SUM(quantity) FROM cart_basket WHERE user_id = '$user_id'") or trigger_error("Invalid data");
    $items_total = mysqli_fetch_row($items_in_cart);

}

echo json_encode(array('items_no'=>$items_total));

?>