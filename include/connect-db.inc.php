<?php

//set db as constants
DEFINE ('DBHOST','localhost');
DEFINE ('DBUSER','root');
DEFINE ('DBPASS', '');
DEFINE ('DBNAME', 'almas_parlour');

$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
if(!$conn)
    trigger_error("Connection to DB failed");

//function to clean input
function clean_input($data)
{
    //set connection to global
    global $conn;

    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = mysqli_real_escape_string($conn, $data);

    return $data;
}

?>