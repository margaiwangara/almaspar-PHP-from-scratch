<?php

//require db
require_once 'include/connect-db.inc.php';

$user_id = clean_input($_GET['user_id']);

//set default value to zero
$quantity_count = 0;

$get_user_id = mysqli_query($conn, "SELECT * FROM user_registration WHERE email = '$user_id'");
if(mysqli_num_rows($get_user_id) > 0)
{
    //fetch all user data
    $user_data = mysqli_fetch_assoc($get_user_id);
    $user_id = $user_data['user_id'];

    //get info from cart basket
    $get_count = mysqli_query($conn, "SELECT * FROM cart_basket WHERE user_id = '$user_id'");
    if(mysqli_num_rows($get_count) > 0)
    {
        while($item_count = mysqli_fetch_assoc($get_count))
        {
            $quantity_count += $item_count['quantity'];
        }
    }
}


echo $quantity_count;
?>