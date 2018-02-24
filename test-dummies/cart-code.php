//get quantity before deletion
$quantity_uncart_query = mysqli_query($conn, "SELECT quantity FROM cart_basket WHERE item_id = '$item_id' AND user_id = '$user_id'") or trigger_error("Query execution failed - Uncart Quantity");
if (mysqli_num_rows($quantity_uncart_query) == 1) {
//collect quantity
$uncart_data = mysqli_fetch_assoc($quantity_uncart_query);
$uncart_quantity = $uncart_data['quantity'];

$compare_quantity = $uncart_quantity - $check_quantity;

if($compare_quantity == 0)
{
//delete that item from db
$remove_carted = mysqli_query($conn, "DELETE FROM cart_basket WHERE item_id = '$item_id' AND user_id = '$user_id'") or trigger_error("Error deleting entire record");
if(mysqli_affected_rows($conn) == 1)
{
$update_cart_message = "Cart updated successfully";

//get items from item list -- this is alot of unnecessary coding
$item_list_update = mysqli_query($conn, "SELECT item_quantity FROM items_list WHERE item_id = '$item_id'") or trigger_error("Error acquiring data");
if(mysqli_num_rows($conn) == 1)
{
$update1 = mysqli_fetch_assoc($item_list_update);

$update1_quantity = $update1['item_quantity'];

$update1_quantity = $update1_quantity + $check_quantity;

//update item list
mysqli_query($conn, "UPDATE items_list SET item_quantity = '$update1_quantity' WHERE  item_id = '$item_id'") or trigger_error("Last null update failed");
if(mysqli_affected_rows($conn) == 1)
{
$update_cart_message = "Update process complete";
}else
$update_cart_message = "Update process failed";
}
}else
$update_cart_message = "Cart failed to delete the product due to a system error";
}
else if($compare_quantity < 0)
$update_cart_message = "You can't delete more than the number you have carted";
else if($compare_quantity > 0)
{
//delete the quantity
$new_user_quantity = mysqli_query($conn, "UPDATE cart_basket SET quantity = '$check_quantity' WHERE item_id = '$item_id' AND user_id = '$user_id'") or trigger_error("Update failed");
if(mysqli_affected_rows($conn) == 1)
{
$update_cart_message = "Cart updated successfully";

//update item list - get quantity again
$final_update = mysqli_query($conn,"SELECT item_quantity FROM items_list WHERE item_id = '$item_id'") or trigger_error("Final update failed to execute");
if(mysqli_num_rows($final_update) == 1)
{
//get quantity
$final_data = mysqli_fetch_assoc($final_update);

$final_quantity = $final_data['item_quantity'];

$final_quantity = $final_quantity + $compare_quantity;

//update items list
mysqli_query($conn, "UPDATE items_list SET item_quantity = '$final_quantity' WHERE item_id = '$item_id'") or trigger_error("Final update failed");
if(mysqli_affected_rows($conn) == 1)
{
$update_cart_message = "Final update successful";
}
else
$update_cart_message = "Final update failed";
}
}
else
$update_cart_message = "Cart failed to update due to a system error";
}