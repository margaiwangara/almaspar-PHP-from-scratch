<?php
if(session_status() == PHP_SESSION_NONE)
    //set session
    session_start();

//connect to db
require_once __DIR__.'/../../include/connect-db.inc.php';

//initialize error message
$item_message = FALSE;

//get sort categories
if(isset($_GET['t']))
{
    if(preg_match('%^[a-z]{5,10}$%',stripslashes(trim($_GET['t']))))
    {
        $t = clean_input($_GET['t']);

    }
    else
    {
        $item_message = "Invalid data";
        $t = FALSE;
    }
}

if(isset($_GET['o']))
{
    if(preg_match('%^[a-z]{2,5}$%',stripslashes(trim($_GET['o']))))
    {
        $o = clean_input($_GET['o']);
    }
    else
    {
        $item_message = "Invalid data input";
        $o = FALSE;
    }
}


//check the GET statements output
if(!empty($o) && !empty($t))
{
    //sort by name
    if($t == 'name' && $o = 'asc')
    {
        //set col name
        $t = "item_name";
        $sort_query = mysqli_query($conn, "SELECT * FROM items_list ORDER BY item_name ASC") or trigger_error("Name asc not acquired");
    }else if($t == 'name' && $o = 'desc')
    {
        $t = "item_name";
        $sort_query = mysqli_query($conn, "SELECT * FROM items_list ORDER BY item_name DESC") or trigger_error("Name desc not acquired");

    }

    //sort by quantity
    if($t == 'quantity' && $o = 'asc')
    {
        //set col name
        $t = "item_quantity";
        $sort_query = mysqli_query($conn, "SELECT * FROM items_list ORDER BY item_quantity ASC") or trigger_error("Asc not acquired");

    }else if($t == 'quantity' && $o = 'desc')
    {
        $t = "item_quantity";
        $sort_query = mysqli_query($conn, "SELECT * FROM items_list ORDER BY item_quantity DESC") or trigger_error("Desc not acquired");
    }
    //sort by price
    if($t == 'price' && $o = 'asc')
    {
        //set col name
        $t = "item_price";
        $sort_query = mysqli_query($conn, "SELECT * FROM items_list ORDER BY item_price ASC") or trigger_error("Asc not acquired");
    }else if($t == 'price' && $o = 'desc')
    {
        $t = "item_price";
        $sort_query = mysqli_query($conn, "SELECT * FROM items_list ORDER BY item_price DESC") or trigger_error("Desc not acquired");
    }

    //date
    if($t == 'date' && $o = 'asc')
    {
        //set col name
        $t = "upload_date";
        $sort_query = mysqli_query($conn, "SELECT * FROM items_list ORDER BY upload_date ASC") or trigger_error("Asc not acquired");
    }else if($t == 'date' && $o = 'desc')
    {
        $t = "upload_date";
        $sort_query = mysqli_query($conn, "SELECT * FROM items_list ORDER BY upload_date DESC") or trigger_error("Desc not acquired");
    }

    //check for impact
    if(mysqli_num_rows($sort_query) > 0)
    {
        //fetch data
        while($sort_data = mysqli_fetch_assoc($sort_query))
        {
            $prod_id [] = $sort_data['item_id'];
            $prod_image [] = $sort_data['image_path'];
            $prod_code [] = $sort_data['item_code'];
            $prod_type [] = $sort_data['type'];
            $prod_size [] = $sort_data['item_size'];
            $prod_quantity [] = $sort_data['item_quantity'];
            $prod_date [] = $sort_data['upload_date'];
        }
    }
}
?>