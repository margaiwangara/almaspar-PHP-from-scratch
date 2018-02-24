<?php
if(session_status() == PHP_SESSION_NONE)
    //session start
    session_start();

//require db
require_once __DIR__.'/../../include/connect-db.inc.php';

//include functions
include_once __DIR__.'/../../functions/functions.php';

$ef_message = FALSE;
if(isset($_POST['add-submit']))
{

   echo "I work";




}


?>