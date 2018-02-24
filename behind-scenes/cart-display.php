<?php

if(session_status() == PHP_SESSION_NONE)
    //session start
    session_start();

//get db
require_once __DIR__.'/../include/connect-db.inc.php';

$cart_message = FALSE;
$total_price = "0.00";
$noOfItems = 0;

if(isset($_SESSION['USER_EMAIL']))
{
    $cart_show_user_id = $_SESSION['USER_ID'];

    $cart_show_query = mysqli_query($conn, "SELECT cart_basket.item_price new_price,cart_basket.item_id,items_list.item_name,items_list.image_path,items_list.item_price old_price,cart_basket.quantity FROM cart_basket 
                        INNER JOIN items_list ON cart_basket.item_id = items_list.item_id WHERE cart_basket.user_id = '$cart_show_user_id' ORDER BY cart_date DESC")
                        or trigger_error("Cart acquisition error");
    if(mysqli_affected_rows($conn) > 0)
    {
        $noOfItems = mysqli_num_rows($cart_show_query);

        //get all the data
        while($cart_data = mysqli_fetch_assoc($cart_show_query))
        {
            $cart_show_item_id [] = $cart_data['item_id'];
            $cart_show_image [] = "/../almas-parlour/".$cart_data['image_path'];
            $cart_show_oprice [] = $cart_data['old_price'];
            $cart_show_nprice [] = $cart_data['new_price'];
            $cart_show_name [] = $cart_data['item_name'];
            $cart_show_quantity [] = $cart_data['quantity'];

            $total_price += $cart_data['new_price'];
            $total_price = number_format((float)$total_price,2,'.','');

        }

        $_SESSION['TOTAL_PRICE'] = $total_price;
        $_SESSION['NO_OF_CART_ITEMS'] = $noOfItems;


    }
    else
        $cart_message = "There are no items to display";

}
else
    $cart_message = "You must login to view items in cart";





?>