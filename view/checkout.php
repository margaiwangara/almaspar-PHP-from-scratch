<?php

//include master file
include_once __DIR__."/../include/master.inc.php";


?>
<title>Alma's Parlour - Checkout</title>
<div class="container" id="wrapper">

    <?php
        //add navigation bar
        include_once __DIR__."/../include/navbar.inc.php";
    ?>

    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title"><span class="text"><strong>ACCOUNT AND BILLING</strong> process</span></h4>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title text-center">
                                <a data-toggle="collapse" data-parent="#accordion" href="#accordion-child">
                                    <strong>Account Details</strong>
                                </a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse in" id="accordion-child">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="" method="post">
                                        <div class="col-md-4">
                                            <h4><strong>Account Details</strong></h4>
                                            <div class="form-group">
                                                <input type="text" name="account_fname" placeholder="First Name" class="form-control" id="fname_id" autocomplete="off"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="account_lname" placeholder="Last Name" class="form-control" id="lname_id" autocomplete="off"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="account_email" placeholder="someone@example.com" class="form-control" id="accountemal_id" autocomplete="off"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="account_tel" placeholder="715-000-000" id="acctel_id" class="form-control" autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <h4><strong>Contact Address</strong></h4>
                                            <div class="form-group">
                                                <input type="text" name="add_addname" class="form-control" id="add_addname_id" placeholder="Address Name" autocomplete="off"/>
                                            </div>
                                            <div class="form-group">
                                               <textarea class="form-control" maxlength="150" name="add_address1" id="add_address1_id" rows="3" placeholder="Address 1" style="resize: none;" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="add_address2" class="form-control" id="add_address2_id" rows="3" placeholder="Address 2" style="resize: none;"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <select name="add_city" id="add_city_id" class="form-control" required>
                                                    <option value="city_name" selected>Nairobi</option>
                                                    <option value="city_name" selected>Mombase</option>
                                                    <option value="city_name" selected>Kisumu</option>
                                                    <option value="city_name" selected>Mumias</option>
                                                    <option value="city_name" selected>Kakamega</option>
                                                    <option value="city_name" selected>Eldoret</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="add_postcode" class="form-control" id="add_postcode_id" placeholder="Postal Code" autocomplete="off" required/>
                                            </div>
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-primary" name="accnt_details_submit" id="details_submit_id">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title text-center">
                                <a data-toggle="collapse" data-parent="#accordion" href="#accordion-child1">
                                    <strong>Billing Details</strong>
                                </a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="accordion-child1">
                            <div class="panel-body">
                                <div class="col-md-8">
                                    <h4 class="text">Lipa na M-Pesa</h4>
                                    <h5>
                                        To use Lipa na M-Pesa use the details and instruction below:
                                    </h5>
                                    <ol style="line-height: 20px;">
                                        <li>Go to M-Pesa menu then select "Lipa na M-Pesa</li>
                                        <li>Select Paybill</li>
                                        <li>Select "Enter business no. " and enter the number<strong>5245125</strong></li>
                                        <li>Select "Enter account no." <strong>Alma's Parlour</strong> and press "OK"</li>
                                        <li>Enter total amount of the product and press "OK"</li>
                                        <li>Enter your M-Pesa PIN and press "OK"</li>
                                        <li>Confirm all your details are correct then press "OK"</li>
                                        <li>You will receive a confirmation message shortly</li>
                                    </ol>
                                    <p style="font-size: medium">
                                        <strong>PayBill Number:</strong> 5245125
                                        <strong>Account Number:</strong> Alma's Parlour
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-right">
                                            <h4><strong>Transaction Summary</strong></h4>
                                            <p><strong>No of items: </strong><span class="item-count"></span></p>
                                            <p><strong>Total Price:</strong></p>
                                            <p style="font-size: large;">Kshs. <?php if(isset($_SESSION['TOTAL_PRICE']))echo $_SESSION['TOTAL_PRICE'];?></p>
                                            <button class="btn btn-primary btn-lg">Pay Now With Paypal</button>
                                        </div>
                                        <div class="panel-body text-right">
                                            <p><strong>Total Price of items:</strong></p>
                                            <p style="font-size: large;">Kshs. <?php if(isset($_SESSION['TOTAL_PRICE'])) echo $_SESSION['TOTAL_PRICE'];?></p>
                                            <p><strong>Cargo Price:</strong></p>
                                            <p style="font-size: large;">Kshs. 2.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

//include footer
include_once __DIR__.'/../include/footer-page.inc.php';
?>