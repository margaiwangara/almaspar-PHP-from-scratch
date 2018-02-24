<?php

include_once __DIR__ . '/include/connect-db.inc.php';

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    //get items
    $item_code = $_GET['item_code'];
    $item_name = $_GET['item_name'];
    $item_type = $_GET['item_type'];
    $item_color = $_GET['item_color'];
    $image_path = "items-images/".$_GET['image_path'];
    $item_descr = $_GET['item_descr'];
    $add_info = $_GET['add_info'];

    //insert into db
    $insert_items = mysqli_query($conn, "INSERT INTO items_list(item_code, item_name, type, color, image_path, description, additional_info) VALUES ('$item_code','$item_name','$item_type','$item_color','$image_path','$item_descr','$add_info')");
    if($insert_items)
        echo "Items inserted successfully";
    else
        echo "Failed to insert items";








}


?>