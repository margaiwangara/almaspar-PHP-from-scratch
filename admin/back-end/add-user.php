<?php
if(session_status() == PHP_SESSION_NONE)
    //set session
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';




?>