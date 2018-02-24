<?php
if(session_status() == PHP_SESSION_NONE)
    //start session
    session_start();

//connect db
require_once __DIR__.'/../include/connect-db.inc.php';

$get_mes = $uid = $pconfirm_code = FALSE;
//get values

if(isset($_GET['rid']))
{
    if(preg_match('%^[1-9][0-9]{0,10}$%',stripslashes(trim($_GET['rid']))))
    {
        $uid = clean_input($_GET['rid']);
    }
    else
    {
        $uid = FALSE;
        $get_mes = "Invalid data";
    }
}

if(isset($_GET['ra']))
{
    $pconfirm_code = clean_input($_GET['ra']);
}


if($uid && $pconfirm_code)
{
    //check if they match with the db values
    $check_code = mysqli_query($conn, "SELECT pass_reset_code,pass_reset_confirmed,user_id FROM user_registration WHERE user_id = '$uid' AND pass_reset_code = '$pconfirm_code'") or trigger_error("Data acquisition failed");
    if(mysqli_num_rows($check_code) == 0)
    {
        $get_mes = "Link has expired";
    }

}
else
    $get_mes = "Error";


?>