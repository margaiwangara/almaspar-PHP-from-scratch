<?php
if(session_status() == PHP_SESSION_NONE)
    //start session
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

$delete_solo = FALSE;

if(preg_match('%^[1-9][0-9]{0,10}$%',stripslashes(trim($_POST['prod_id']))))
{
    $prod_id = clean_input($_POST['prod_id']);
}
else
{
    $prod_id = FALSE;
    $delete_solo = "Invalid item data";
}

if($prod_id)
{
    $delete_query = mysqli_query($conn, "DELETE FROM items_list WHERE item_id = '$prod_id'") or trigger_error("Item failed to delete");
    if(mysqli_affected_rows($conn) == 1)
    {
        $delete_solo = "<span style='color='green'>Item deleted successfully</span>";
    }
    else
    {
        $delete_solo = "Item not deleted";
    }
}
echo $delete_solo;




?>