<?php
if(session_status() == PHP_SESSION_NONE)
    //session start
    session_start();

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

$result_code = FALSE;
$total_results = 0;
if(isset($_GET['result']))
{
    if(preg_match('%^[A-Za-z0-9\s.\-]+$%',stripslashes(trim($_GET['result']))))
    {
        $search_item = clean_input($_GET['result']);
    }
    else
    {
        $search_item = FALSE;
    }

    if($search_item)
    {
        //get data from db
        $search_query = mysqli_query($conn, "SELECT * FROM items_list WHERE item_name LIKE '%$search_item%' OR item_code LIKE '%$search_item%' OR item_id LIKE '%$search_item%' ORDER BY upload_date DESC") or trigger_error("Items not acquired");
        if(mysqli_num_rows($search_query) > 0)
        {
            while($search_result = mysqli_fetch_assoc($search_query))
            {
                $result_image [] = "../".$search_result['image_path'];
                $result_code [] = $search_result['item_code'];
                $result_type [] = $search_result['type'];
                $result_name [] = $search_result['item_name'];
                $result_color [] = $search_result['color'];
                $result_price [] = $search_result['item_price'];
                $result_size [] = $search_result['item_size'];
                $result_id [] = $search_result['item_id'];
            }
            $total_results = mysqli_num_rows($search_query);
        }
    }

}

?>