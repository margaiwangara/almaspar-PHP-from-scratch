<?php
if(session_status() == PHP_SESSION_NONE)
    //stsrt session
    session_start();

//connect to db
require_once __DIR__.'/../include/connect-db.inc.php';

$update_cart_message = $iterator = FALSE;
if(isset($_SESSION['USER_EMAIL'])) {

    if (isset($_POST['update_cart'])) {

        //user id
        $user_id = $_SESSION['USER_ID'];

        //default checkbox value
        $bool_delete = FALSE;

        //cart id
        foreach($_POST['cart_item_id'] as $key=>$value)
        {
            if (preg_match('%^[1-9][0-9]{0,20}$%', stripslashes(trim($value))))
            {
                $item_id [] = clean_input($value);
            }
            else {
                $item_id = FALSE;
                $update_cart_message = "Invalid data";
            }
        }


        //quantity update
        foreach ($_POST['uncart_quantity'] as $key=>$value)
        {
            if (preg_match('%^[1-9][0-9]{0,20}$%', stripslashes(trim($value))))
            {
                $check_quantity [] = clean_input($value);
            }
            else {
                $check_quantity = FALSE;
                $update_cart_message = "Invalid data";
            }
        }


        //checkbox value
        if (isset($_POST['uncart_checker'])) {
            foreach($_POST['uncart_checker'] as $key=>$value)
            {
                if (preg_match('%^[0-9][0-9]{0,3}$%', stripslashes(trim($value))))
                {
                    $bool_delete [] = clean_input($value);
                }
                else {
                    $bool_delete = FALSE;
                    $update_cart_message = "Invalid data";
                }
            }

        }

        if ($bool_delete) {

            foreach($bool_delete as $key=>$value)
            {
                //delete all that are checked
                $item_id = $value;

                //delete item
                $uncart_query = mysqli_query($conn, "DELETE FROM cart_basket WHERE item_id = '$item_id' AND user_id = '$user_id'") or trigger_error("Uncart delete query failed to execute");
                if (mysqli_affected_rows($conn) == 1) {
                    $update_cart_message = "Item removed from cart";

                    //get old data from items list
                    $items_list_query = mysqli_query($conn, "SELECT item_quantity FROM items_list WHERE item_id = '$item_id'") or trigger_error("Item extraction failed");
                    if (mysqli_num_rows($items_list_query) == 1) {
                        //get data
                        $il_data = mysqli_fetch_assoc($items_list_query);

                        //get quantity
                        $il_quantity = $il_data['item_quantity'];

                        //add the checked to it
                        $il_quantity = $il_quantity + $check_quantity[$key];

                        //update the items list
                        $uncart_update = mysqli_query($conn, "UPDATE items_list SET item_quantity = '$il_quantity' WHERE item_id = '$item_id'") or trigger_error("Quantity update failed");
                        if (mysqli_affected_rows($conn) == 1) {
                            $update_cart_message = "Item has been deleted successfully";
                        } else
                            $update_cart_message = "Item quantity update failed";
                    }
                } else
                    $update_cart_message = "Item failed to delete from cart";
            }

        } else if ($check_quantity) {

            foreach ($check_quantity as $key=>$value)
            {

                //get data from cart table
                $check_query = mysqli_query($conn, "SELECT quantity FROM cart_basket WHERE user_id = '$user_id' AND item_id = '$item_id[$key]'") or trigger_error("Check query failed");
                if (mysqli_num_rows($check_query) == 1) {
                    //get old quantity
                    $quan_exist_data = mysqli_fetch_assoc($check_query);

                    $quan_exist = $quan_exist_data['quantity'];

                    if ($value > $quan_exist) {
                        //go to items list
                        $old_quan_query = mysqli_query($conn, "SELECT item_quantity FROM items_list WHERE item_id = '$item_id[$key]'") or trigger_error("Old data extraction failed");
                        if (mysqli_num_rows($old_quan_query) == 1) {
                            $borrow_data = mysqli_fetch_assoc($old_quan_query);

                            $borrow_quan = $borrow_data['item_quantity'];

                            //get difference
                            $borrow_diff = ($borrow_quan + $quan_exist) - $value;

                            if ($borrow_diff < 0)
                                $update_cart_message = "Your quantity exceeds the number of items we have in stock";
                            else {
                                //give permission to take
                                //update cart with new quantity
                                mysqli_query($conn, "UPDATE cart_basket SET quantity = '$value' WHERE item_id = '$item_id[$key]' AND user_id = '$user_id'") or trigger_error("Update failed");
                                if (mysqli_affected_rows($conn) == 1) {
                                    //successful update
                                    //update items list
                                    mysqli_query($conn, "UPDATE items_list SET item_quantity = '$borrow_diff' WHERE item_id = '$item_id[$key]'") or trigger_error("Items list not updated");
                                    if (mysqli_affected_rows($conn) == 1) {
                                        $update_cart_message = "Update was successful";
                                    } else
                                        $update_cart_message = "Update did not complete";
                                } else
                                    $update_cart_message = "Cart update failed";
                            }
                        }
                    } else if ($value < $quan_exist) {
                        $return_diff = $quan_exist - $value;

                        //get items form items list
                        $return_ilquery = mysqli_query($conn, "SELECT item_quantity FROM items_list WHERE item_id = '$item_id[$key]'") or trigger_error("Acquisition failed");
                        if (mysqli_num_rows($return_ilquery) == 1) {
                            //get quantity
                            $return_ildata = mysqli_fetch_assoc($return_ilquery);

                            $return_ilquan = $return_ildata['item_quantity'];

                            //add them
                            $return_ilquan = $return_ilquan + $return_diff;

                            //update table
                            mysqli_query($conn, "UPDATE items_list SET item_quantity = '$return_ilquan' WHERE item_id = '$item_id[$key]'") or trigger_error("Update final failed");
                            if (mysqli_affected_rows($conn) == 1) {
                                $update_cart_message = "Items update successful";

                                //update cart data now
                                mysqli_query($conn, "UPDATE cart_basket SET quantity = '$value' WHERE item_id = '$item_id[$key]' AND user_id = '$user_id'") or trigger_error("Update failed");
                                if (mysqli_affected_rows($conn) == 1) {
                                    $update_cart_message = "Cart update was successful";
                                } else
                                    $update_cart_message = "Cart update failed";
                            } else
                                $update_cart_message = "Items update failed";
                        }

                    }
                    else
                        $update_cart_message = "Item updated successfully";

                }
                else $update_cart_message = "This value does not exist in cart ".$item_id[$key];
            }

        }
        else
            $update_cart_message = "No operations selected";
    }

}
else
    $update_cart_message = "Not a member";

?>