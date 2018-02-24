
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<div class="container" style="padding-top: 5%;">
    <div class="row">
        <div class="col-md-10" style="font-size: 15px;">
            <?php


            //require db
            require_once __DIR__.'/../include/connect-db.inc.php';


            $get_items = mysqli_query($conn, "SELECT * FROM items_list");
            $noOfItems = mysqli_num_rows($get_items);

            $items_per_page = 8;
            $noOfPages = ceil($noOfItems/$items_per_page);
            //echo $noOfPages;

            echo "<ul class='pagination'>";

            for($page = 1;$page <= $noOfPages;$page++)
            {
                echo "<li><a href='pagination-test.php?page=" . $page . "'>".$page."</a></li>";
            }

            echo "</ul>";


            if(!isset($_GET['page']))
                $page = 1;
            else
                $page = $_GET['page'];

            $first_result = ($page-1)*$items_per_page;

            $run_query = mysqli_query($conn, "SELECT * FROM items_list LIMIT ".$first_result.",".$items_per_page."");

            echo "<h5><strong>Showing results </strong>".($first_result+1)." - ".($first_result+$noOfItems)."</h5>";
            echo "<table class='table table-striped'><tr><th>Item code</th><th>Item Name</th><th>Item type</th><th>Item price</th><th>Item color</th></tr>";

            while($all_items = mysqli_fetch_assoc($run_query))
            {
                echo "<tr><td>".$all_items['item_code']."</td><td>".$all_items['item_name']."</td><td>".$all_items['type']."</td><td>".$all_items['item_price']."</td>
                    <td>".$all_items['color']."</td></tr>";

            }
            echo "</table>";



            ?>
        </div>
    </div>

</div>
