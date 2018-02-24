<?php
//set session
if(session_status() == PHP_SESSION_NONE)
    //session start
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';
//use item code to add visual elements
$item_code = clean_input($_POST['item_code']);



?>