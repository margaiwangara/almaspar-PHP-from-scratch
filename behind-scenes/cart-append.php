<?php

if(session_status() == PHP_SESSION_NONE)
    //start session
    session_start();

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

$append_message = FALSE;
//validate input from user

if(isset($_SESSION['USER_EMAIL'])) {

    //validate user id
    if (preg_match('%^[1-9][0-9]{0,10}$%', stripslashes(trim($_SESSION['USER_ID'])))) {
        $user_id = clean_input($_SESSION['USER_ID']);
    } else {
        $user_id = FALSE;
        $append_message = "Invalid data input";

    }

    //validate item id
    if (preg_match('%^[1-9][0-9]{0,10}$%', stripslashes(trim($_POST['item_id'])))) {
        $item_id = clean_input($_POST['item_id']);
    } else {
        $item_id = FALSE;
        $append_message = "Invalid data input";

    }

    //validate quantity
    if (preg_match('%^[1-9][0-9]{0,10}$%', stripslashes(trim($_POST['quantity'])))) {
        $quantity = clean_input($_POST['quantity']);
    } else {
        $quantity = FALSE;
        $append_message = "Invalid data input";

    }

    //validate price
    if (preg_match('%^[0-9]+(\.[0-9]{1,2})?$%', stripslashes(trim($_POST['price'])))) {
        $price = clean_input($_POST['price']);
    } else {
        $price = FALSE;
        $append_message = "Invalid data input";
    }

    if ($quantity && $user_id && $price && $item_id) {
        //get quantity to compare
        $get_quantity = mysqli_query($conn, "SELECT item_quantity FROM items_list WHERE item_id = '$item_id'");
        if (mysqli_num_rows($get_quantity) == 1) {
            $orij_data = mysqli_fetch_assoc($get_quantity);
            $orij_quantity = $orij_data['item_quantity'];

            //get the difference btn orijinal and selected quantity
            $new_quantity = $orij_quantity - $quantity;
            if ($new_quantity < 0)
                $append_message = "This item is out of stock";//quantity overload
            else {
                //check if that item exists in db
                $item_exist_query = mysqli_query($conn, "SELECT quantity,item_price FROM cart_basket WHERE user_id = '$user_id' AND item_id = '$item_id'") or trigger_error("Existance query failed");
                if (mysqli_affected_rows($conn) == 1) {
                    $exist_data = mysqli_fetch_assoc($item_exist_query);

                    //quantity and price
                    $exist_quantity = $exist_data['quantity'] + $quantity;
                    $exist_price = $exist_data['item_price'] + $price;

                    //update db
                    $exist_query = mysqli_query($conn, "UPDATE cart_basket SET quantity='$exist_quantity',item_price='$exist_price' WHERE user_id = '$user_id' AND item_id = '$item_id'") or trigger_error("Carterising Update failed");
                    if (mysqli_affected_rows($conn) == 1)
                    {
                        $append_message = "Item updated in cart";

                        //update item list
                        mysqli_query($conn, "UPDATE items_list SET item_quantity = '$new_quantity' WHERE item_id='$item_id'") or trigger_error("Failed to update quantity");
                    }
                    else
                        $append_message = "Item has not been added to cart due to a system error. Please try again";
                } else {
                    //insert into cart
                    $add_to_cart = mysqli_query($conn, "INSERT INTO cart_basket(user_id, item_id, quantity, status, item_price) VALUES('$user_id','$item_id','$quantity','carted','$price')");
                    if (mysqli_affected_rows($conn) == 1) {
                        $append_message = "Item added to cart";
                        mysqli_query($conn, "UPDATE items_list SET item_quantity = '$new_quantity' WHERE item_id='$item_id'") or trigger_error("Failed to update quantity");
                    } else
                        $append_message = "Item not added to cart";

                }

            }

        } else
            $append_message = "Invalid data entry";

    }else
        $append_message = "Invalid data";
}
else
    $append_message = "Please login to add item to cart";

    echo json_encode(array('append_message'=>$append_message));

?>