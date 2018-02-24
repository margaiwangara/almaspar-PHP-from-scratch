<?php

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

//get ip address
$user_ip = $_SERVER['REMOTE_ADDR'];

//input data into the db
$insert_ip = mysqli_query($conn, "INSERT INTO user_traffic(ip) VALUES ('$user_ip')") or trigger_error("Views query failed");
if(mysqli_affected_rows($conn) == 0)
    echo "<script>alert('Visitor count failed ".mysqli_error($conn)."');</script>";

?>


