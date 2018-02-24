<?php

if(session_status() == PHP_SESSION_NONE)
    //set session
    session_start();

//connect db
require_once __DIR__.'/../include/connect-db.inc.php';

//page output
$visitor_message = FALSE;
if(!isset($_SESSION['USER_ID']))
{
    //get ip address
    $visitor_ip = $_SERVER['REMOTE_ADDR'];

    //insert into db
    $add_visitor = mysqli_query($conn, "INSERT INTO visitors_count(visitor_ip) VALUES('$visitor_ip')") or trigger_error("Visitor ip not set");
    if(mysqli_affected_rows($conn) == 0)
        $visitor_message = "Ip not input into db";

}

?>