<?php

//get data from sql
require_once __DIR__.'/../include/connect-db.inc.php';


$getdata = mysqli_query($conn, "SELECT * FROM items_list WHERE type = 'dress' ORDER BY upload_date DESC") or trigger_error("Failed to execute query");
if(mysqli_num_rows($getdata) > 0)
{
    while($fetchdata = mysqli_fetch_assoc($getdata))
    {
        $id []= $fetchdata['item_id'];
        $name []= $fetchdata['item_name'];
        $price []= $fetchdata['item_price'];
        $size []= $fetchdata['item_size'];
        $quantity [] = $fetchdata['item_quantity'];
    }
}

if(isset($_POST['update_button']))
{

    //check if checkbox is check
    if(isset($_POST['item_check']))
    {
        foreach($_POST['item_check'] as $key=>$value)
        {
            $identifier[] = $value;
        }
    }

    if($identifier)
    {
        foreach($identifier as $key=>$value)
        {
            echo $value." ";
        }
    }
}

?>

<table id="mytable">
    <form action="" method="post">
        <tr>
            <th></th>
            <th>Prod Id</th>
            <th>Prod Name</th>
            <th>Prod Price</th>
            <th>Prod Size</th>
            <th>Quantity</th>
        </tr>
        <?php foreach($id as $key=>$value):?>
        <tr>
            <td><input type="checkbox" name="item_check[]" value="<?php echo $value;?>"></td>
            <td><?php echo $value;?></td>
            <td><?php echo $name[$key];?></td>
            <td><?php echo $price[$key];?></td>
            <td><?php echo $size[$key];?></td>
            <td><?php echo $quantity[$key];?></td>
        </tr>
        <?php endforeach;?>
        <button type="submit" name="update_button">
            Update
        </button>
    </form>
</table>



