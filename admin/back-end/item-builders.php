<?php

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

//initialization
$size_id = FALSE;
$color_id = FALSE;
$type_id = FALSE;

//colors acquisition
$color_query = mysqli_query($conn, "SELECT * FROM prod_color") or trigger_error("Color acquition failed");
if(mysqli_num_rows($color_query) > 0)
{
    while($all_color = mysqli_fetch_assoc($color_query))
    {
        $color_id [] = $all_color['color_id'];
        $color_name [] = stripslashes(trim($all_color['color_name']));
    }

}

//type acquisition
$type_query = mysqli_query($conn, "SELECT * FROM prod_type") or trigger_error("Type acquisition failed");
if(mysqli_num_rows($type_query) > 0)
{
    while($all_types = mysqli_fetch_assoc($type_query))
    {
        $type_id [] = $all_types['type_id'];
        $type_category [] = stripslashes(trim($all_types['category']));
    }
}

//size acquisition
$size_query = mysqli_query($conn, "SELECT * FROM prod_size") or trigger_error("Size acquisition failed");
if(mysqli_num_rows($size_query) > 0)
{
    while($all_sizes = mysqli_fetch_assoc($size_query))
    {
        $size_id [] = $all_sizes['size_id'];
        $size_name [] = stripslashes(trim($all_sizes['size_descr']));
        $item_type [] = stripslashes(trim($all_sizes['item_type']));
    }


}
?>