<?php

//session
session_start();

//db
require_once __DIR__.'/../include/connect-db.inc.php';

//initialize
$fav_sdmess = $identifier = FALSE;;
if(isset($_SESSION['USER_EMAIL']))
{

    if(preg_match('%^[1-9][0-9]{0,10}$%',stripslashes(trim($_POST['fav_item_id']))))
    {
        $item_id = clean_input($_POST['fav_item_id']);
    }
    else
    {
        $item_id = FALSE;
        $fav_sdmess = "Invalid data input";

    }

    if(isset($_SESSION['USER_ID']))
    {
        if(preg_match('%^[1-9][0-9]{0,10}$%',$_SESSION['USER_ID']))
        {
            $user_id = clean_input($_SESSION['USER_ID']);
        }
        else
        {
            $user_id = FALSE;
            $fav_sdmess = "Invalid data input";

        }
    }


        //check availability
        $get_fav = mysqli_query($conn, "SELECT * FROM fav_items WHERE user_id ='$user_id' AND item_id='$item_id'") or trigger_error("No favorites");
        if(mysqli_num_rows($get_fav) == 1)
        {
            //delete items from favourites table
            $delete_fav = mysqli_query($conn, "DELETE FROM fav_items WHERE item_id = '$item_id' AND user_id='$user_id'") or trigger_error("Fav not deleted");
            if(mysqli_affected_rows($conn) == 1)
            {
                $identifier = 1;
                $fav_sdmess = "Item removed from favourites";
            }
            else
                $fav_sdmess = "Item not removed from your favourite list due to a technical error";
        }
        else
        {
            //add item to favs
            $add_to_favs = mysqli_query($conn, "INSERT INTO fav_items(user_id, item_id) VALUES ('$user_id','$item_id')") or trigger_error("Favourite item not added");
            if(mysqli_affected_rows($conn) == 1)
            {
                $identifier = 2;
                $fav_sdmess = "Item added to favourites";
            }
            else
                $fav_sdmess = "Item not added to your favourites list";
        }

}
else
    $fav_sdmess = "You must be logged in to add to favourites";

echo json_encode(array('fav_sd'=>$fav_sdmess,'identifier'=>$identifier));

?>