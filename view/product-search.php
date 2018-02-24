<?php
//include result page
include_once __DIR__.'/../behind-scenes/search-product.php';

//include main page
include_once __DIR__.'/../include/master.inc.php';

?>
<title>Search Result - <?php if(isset($_GET['result'])) echo $_GET['result'];else echo "Product";?></title>
<div id="wrapper" class="container">
    <?php
    //include navigation bar
    include __DIR__."/../include/navbar.inc.php";

    ?>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <h5>Search returned <strong><?php echo $total_results;?></strong> result(s)</h5>
                    <hr>
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>Prod. Image</th>
                            <th>Prod. Code</th>
                            <th>Prod. Name</th>
                            <th>Prod. Type</th>
                            <th>Prod. Color</th>
                            <th>Prod. Price</th>
                            <th>Prod. Size</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($result_code):foreach($result_code as $key=>$value):?>
                        <tr>
                            <td>
                                <a class="thumbnail" href="/../view/display-item.php?ic=<?php echo md5($result_id[$key]);?>-<?php echo $result_id[$key];?>&n=<?php echo $result_name[$key];?>">
                                    <img src="<?php echo $result_image[$key];?>" alt="search-image" height="70" width="50">
                                </a>
                            </td>
                            <td><?php echo $value;?></td>
                            <td>
                                <a href="/../view/display-item.php?ic=<?php echo md5($result_id[$key]);?>-<?php echo $result_id[$key];?>&n=<?php echo $result_name[$key];?>">
                                    <?php echo $result_name[$key];?>
                                </a>
                            </td>
                            <td><?php echo $result_type[$key];?></td>
                            <td><?php echo $result_color[$key];?></td>
                            <td>Kshs. <?php echo $result_price[$key];?></td>
                            <td><?php echo $result_size[$key];?></td>
                        </tr>
                        <?php endforeach;else: echo "Item not found";endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

//include footer
include_once __DIR__.'/../include/footer-page.inc.php';
?>