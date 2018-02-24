<?php

//session
session_start();

//db
require_once __DIR__.'/../include/connect-db.inc.php';

if(isset($_SESSION['USER_EMAIL']))
{
    $item_id = clean_input($_GET['']);

    $delete_item = mysqli_query($conn, "DELETE FROM fav_items WHERE item_id = '$item_id'");
    if($delete_item)
        echo "Removed from favourites";
    else
        echo "Not Removed from favourites";
}

?>