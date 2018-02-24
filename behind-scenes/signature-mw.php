<?php

//include db
include_once __DIR__ . '/../include/connect-db.inc.php';

//code starts here
$signature = "TakeMeToYourLeader";
$finalSignature = str_shuffle($signature);

$total_views = 0;

//get ip info from db
$select_ip = mysqli_query($conn, "SELECT COUNT(DISTINCT ip) FROM user_traffic GROUP BY ip") or trigger_error("Views error query");
if(mysqli_num_rows($select_ip) > 0)
{
    $total_views = mysqli_num_rows($select_ip);
}

?>