<?php

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

$item_count = 0;
$fav_message = FALSE;
if(isset($_SESSION['USER_EMAIL']))
{
    if(isset($_POST['ic']))
    {
        if(preg_match('%^[1-9][0-9]{0,10}$%',stripslashes(trim($_POST['ic']))))
        {
            $item_id = clean_input($_POST['ic']);

            //explode item
            $get_item_id = explode("-",$item_id);
            $item_id = $get_item_id[1];
        }
        else
        {
            $item_id = FALSE;
            $fav_message = "Invalid data entry";

        }
    }

    if(isset($_SESSION['USER_ID']))
    {
        if(preg_match('%^[1-9][0-9]{0,10}$%',$_SESSION['USER_ID']))
        {
            $user_id = $_SESSION['USER_ID'];
        }
        else
        {
            $user_id = FALSE;
            $fav_message = "Invalid data entry";
        }
    }


    if($user_id && $item_id)
    {
        $get_item_table = mysqli_query($conn, "SELECT * FROM fav_items WHERE item_id ='$item_id' AND user_id='$user_id'") or trigger_error("No favourites");
        if(mysqli_num_rows($get_item_table) == 1)
        {
            $item_count = mysqli_num_rows($get_item_table);
        }
    }
    else
        $fav_message = "No data to display";

}


?>