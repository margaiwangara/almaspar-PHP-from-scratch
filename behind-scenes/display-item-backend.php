<?php

//connect db
include_once __DIR__."/../include/connect-db.inc.php";

$item_id = FALSE;
$dp_message = FALSE;

    if(isset($_GET['ic']))
    {
        //get id from url
        $item_id = clean_input($_GET['ic']);
        $get_item_id = explode("-",$item_id);

        if(preg_match('%^[1-9][0-9]{0,9}$%',$get_item_id[1]))
        {
            $item_id = clean_input($get_item_id[1]);
        }
        else
        {
            $item_id = FALSE;
            $dp_message = "Invalid item data";

        }
    }

    if($item_id)
    {

        //get all the item information from db
        $get_item_info = mysqli_query($conn, "SELECT * FROM items_list WHERE item_id='$item_id'") or trigger_error("Item acquisition error");
        if(mysqli_num_rows($get_item_info)> 0)
        {
            //get all the info
            $all_info = mysqli_fetch_assoc($get_item_info);

            //store all the info
            $item_id_num = $all_info['item_id'];
            $item_code = $all_info['item_code'];
            $item_name = $all_info['item_name'];
            $item_type = $all_info['type'];
            $item_descr = $all_info['description'];
            $item_add_info = $all_info['additional_info'];
            $item_color = $all_info['color'];
            //$item_image_path = "../".$all_info['image_path'];
            $item_price = $all_info['item_price'];
            $item_upload_data = $all_info['upload_date'];
            $item_size = $all_info['item_size'];
            $item_quantity = $all_info['item_quantity'];

            $item_images = mysqli_query($conn, "SELECT * FROM prod_images WHERE item_id = '$item_id' ORDER BY image_id DESC ") or trigger_error("Images not acquired");
            if(mysqli_num_rows($item_images) > 0)
            {
                while($prod_images = mysqli_fetch_assoc($item_images))
                {
                    $images_coll [] = "../".$prod_images['image_path'];
                }
            }


        }
        else
            $dp_message = "No item to display";
    }
    else
        $dp_message = "Invalid data entry";



?>