<?php
//set session
if(session_status() == PHP_SESSION_NONE)
    //set
    session_start();

//connect to db
require_once __DIR__.'/../include/connect-db.inc.php';

$visitors_count = 0;
//get unique counts from db
$visits_query = mysqli_query($conn, "SELECT COUNT(DISTINCT visitor_ip) FROM visitors_count GROUP BY visitor_ip") or trigger_error("Visits not acquired");
if(mysqli_num_rows($visits_query) > 0)
{
    $visitors_count = mysqli_affected_rows($conn);

}

?>