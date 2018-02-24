<?php
if(session_status() == PHP_SESSION_NONE)
    //start session
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

$delete_message = FALSE;

if(isset($_POST['update-list']))
{
    //confirm checkboxes are checked
    if (isset($_POST['view-checkbox'])) {
        foreach($_POST['view-checkbox'] as $key=>$value)
        {
            if (preg_match('%^[1-9][0-9]{0,10}$%', stripslashes(trim($value))))
            {
                $check_delete [] = clean_input($value);
            }
            else {
                $check_delete = FALSE;
                $delete_message = "Invalid data";
            }
        }

    }

    if($check_delete)
    {
        foreach($check_delete as $key=>$value)
        {
            //query db
            $cdelete_query = mysqli_query($conn, "DELETE FROM items_list WHERE item_id = '$value'") or trigger_error("Items not deleted");
            if(mysqli_affected_rows($conn) == 1)
            {
                $delete_message = "<span style='color: green;'>Item deleted successfully</span>";
            }
            else
            {
                $delete_message = "Items not deleted";
            }
        }
    }
}



?>