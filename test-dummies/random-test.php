<?php

/*
$random = range(1,50);
shuffle($random);

for($i=0;$i<count($random);$i++)
    echo "<strong>Number ".$i."</strong>: ".$random[$i]."<br>";
*/

/*
$random = rand(125425,999999);
echo $random;

//echo "<div style='color: green;font-size: 35px;font-weight: bold;position: absolute;left: 25%;'>Registration Successful. Redirecting...</div>";
echo "<div style='font-family: Cambria;font-weight: bold;font-size: 35px;color: #004085;position: absolute;top: 2%;left: 17%;'>
                    Account Confirmation Success. Redirecting to Login Page...      
                  </div>";


include_once __DIR__.'/../include/connect-db.inc.php';

$password = 'gabriella';
$hash_password = password_hash($password, PASSWORD_DEFAULT);
$date = date('Y-M-D H:i:s');

$insert = mysqli_query($conn, "INSERT INTO admin_info(username, password) VALUES('admin@almasparlour.co.ke','$hash_password')");
if($insert)
    echo "Success";
else
    echo "Failed";
*/

/*
$trial = "margai";
$trial =substr($trial,3);
echo $trial;
*/

require_once __DIR__.'/../include/connect-db.inc.php';

$username = "sallyambila"
?>