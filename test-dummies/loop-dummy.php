<?php

/*
$sample = array(1,2,3,4,5,6,7,8,9,10,11,12);
$counter = 0;

?>

<table>
    <?php foreach($sample as $key=>$value):if($counter > 6):$counter = 0;?>
    <tr>
        <?php  else:?>
        <td><?php echo $value;$counter++;?></td>
    </tr>
    <?php endif;endforeach;?>
</table>
*/

//connect db
require_once __DIR__.'/../include/connect-db.inc.php';

//get items from db
$get_items = mysqli_query($conn, "SELECT cart_basket.*, items_list.item_code,items_list.item_name,items_list.image_path,items_list.item_size FROM cart_basket INNER JOIN items_list ON cart_basket.item_id = items_list.item_id WHERE cart_basket.status = 'carted' ORDER BY cart_basket.cart_date DESC");
if(mysqli_num_rows($get_items) > 0)
{
    while($total_items = mysqli_fetch_assoc($get_items))
    {
        $cart_id [] = $total_items['cart_id'];
        $user_id [] = $total_items['user_id'];//irrelevant
        $item_id [] = $total_items['item_id'];
        $item_quantity [] = $total_items['quantity'];
        $item_price [] = $total_items['item_price'];
        $item_code [] = $total_items['item_code'];
        $item_name [] = $total_items['item_name'];
        $image_path [] = $total_items['image_path'];
        $item_size[] = $total_items['item_size'];
    }
}



?>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Loop Dummy 1.0.0</title>
</head>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Image</th>
            <th>Cart ID</th>
            <th>Item Code</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <tr><?php foreach($cart_id as $key=>$value):?></tr>
        <td><img src="/../almas-parlour/<?php echo $image_path[$key];?>" alt="image-name" height="30" width="30"></td>
        <td><?php echo $cart_id[$key];?></td>
        <td><?php echo $item_code[$key];?></td>
        <td><?php echo $item_name[$key];?></td>
        <td><?php echo $item_quantity[$key];?></td>
        <td><?php echo $item_size[$key];?></td>
        <td>Kshs. <?php echo $item_price[$key];?></td>
        <tr><?php endforeach;?></tr>
        </tbody>
    </table>
    <ul class="list-inline" style="list-style-type: none;">
        <li>Name</li>
        <li>Name</li>
        <li>Name</li>
        <li>Name</li>
        <li>Name</li>
        <li>Name</li>
    </ul>
</div>


