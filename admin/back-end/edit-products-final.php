<?php
if(session_status() == PHP_SESSION_NONE)
    //session start
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

$ef_message = FALSE;
if(isset($_POST['edit-submit']))
{
    if(preg_match('%^[1-9][0-9]{0,10}$%',stripslashes(trim($_GET['r']))))
    {
        $i = clean_input($_GET['r']); //item id
    }
    else
    {
        $i = FALSE;
        $ef_message = "Invalid data";

    }

    //quantity
    if(preg_match('%^[0-9][0-9]{0,10}$%',stripslashes(trim($_POST['edit-quantity']))))
    {
        $q = clean_input($_POST['edit-quantity']); //quantity
    }
    else
    {
        $q = FALSE;
        $ef_message = "Invalid data";
    }

    //item name
    if(preg_match('%^[a-zA-Z0-9.\,\-\s]+$%',stripslashes(trim($_POST['edit-name']))))
    {
        $n = clean_input($_POST['edit-name']); //name
    }
    else
    {
        $n = FALSE;
        $ef_message = "Invalid data";
    }

    //type
    if(preg_match('%^[a-zA-Z]{0,30}$%',stripslashes(trim($_POST['edit-type']))))
    {
        $t = clean_input($_POST['edit-type']); //type
    }
    else
    {
        $t = FALSE;
        $ef_message = "Invalid data";
    }

    //description
    if(preg_match('%^[a-zA-Z0-9.\,\-\s]+$%',stripslashes(trim($_POST['edit-descr']))))
    {
        $d = clean_input($_POST['edit-descr']);//description
    }
    else
    {
        $d = FALSE;
        $ef_message = "Invalid data";
    }

    //price
    if(preg_match('%^[0-9]+\.?[0-9]{0,2}$%',stripslashes(trim($_POST['edit-price']))))
    {
        $c = clean_input($_POST['edit-price']);//currency
    }
    else
    {
        $c = FALSE;
        $ef_message = "Invalid data";
    }

    //size
    if(preg_match('%^[A-Z1-9]{0,10}$%',stripslashes(trim(strtoupper($_POST['edit-size'])))))
    {
        $s = clean_input($_POST['edit-size']);//size
    }
    else
    {
        $s = FALSE;
        $ef_message = "Invalid data";
    }

    //color
    if(preg_match('%^[a-zA-Z\s]+$%',stripslashes(trim($_POST['edit-color']))))
    {
        $r = clean_input($_POST['edit-color']);
    }
    else
    {
        $r = FALSE;
        $ef_message = "Invalid data";
    }

    //additional info
    if(preg_match('%^[a-zA-Z0-9.\,\s\-]+$%',stripslashes(trim($_POST['edit-info']))))
    {
        $ad = clean_input($_POST['edit-info']);
    }
    else
    {
        $ad = FALSE;
        $ef_message = "Invalid data";
    }

    //item code
    $ic = clean_input($_POST['edit-code']);

    //check if all are not empty
    if($t && $d && $c && $s && $r && $i && $q && $n && $ic)
    {
        //update db
        $read_query = mysqli_query($conn, "UPDATE items_list SET item_code = '$ic',additional_info = '$ad',
        item_name = '$n',type = '$t',description = '$d',color = '$r',item_price = '$c',item_size = '$s',item_quantity = '$q' WHERE item_id = '$i'") or trigger_error("Update failed");

        if(mysqli_affected_rows($conn) == 1)
        {
            $ef_message = "<span style='color: green;'>Item updated successfully</span>";
        }

    }
}


?>