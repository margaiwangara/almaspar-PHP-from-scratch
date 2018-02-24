<?php
if(session_status() == PHP_SESSION_NONE)
    //sessio start
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

$edit_message = FALSE;
if(isset($_GET['r']))
{
    if(preg_match('%^[1-9][0-9]{0,10}$%',stripslashes(trim($_GET['r']))))
    {
        $prod_id = clean_input($_GET['r']);
    }
    else
    {
        $prod_id = FALSE;
        $edit_message = "Invalid data entry";
    }

    if($prod_id)
    {
        $edit_query = mysqli_query($conn, "SELECT * FROM items_list WHERE item_id = '$prod_id'") or trigger_error("Item not found");
        if(mysqli_num_rows($edit_query) == 1)
        {
            //get all the data associated
            $edit_coll = mysqli_fetch_assoc($edit_query);

            $prod_name = $edit_coll['item_name'];
            $prod_code = $edit_coll['item_code'];
            $prod_type = $edit_coll['type'];
            $prod_descr = $edit_coll['description'];
            $prod_addinfo = $edit_coll['additional_info'];
            $prod_image = $edit_coll['image_path'];
            $prod_price = $edit_coll['item_price'];
            $prod_size = $edit_coll['item_size'];
            $prod_quantity = $edit_coll['item_quantity'];
            $prod_color = $edit_coll['color'];

        }
    }
}


?>