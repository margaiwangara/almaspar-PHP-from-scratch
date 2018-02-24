<?php

//session start
if(session_status() == PHP_SESSION_NONE)
    session_start();

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

//total favourites initialization
$total_fav_count = 0;
$total_fav_message = FALSE;

if(isset($_SESSION['USER_EMAIL']))
{
    if(isset($_SESSION['USER_ID']))
    {
        if(preg_match('%^[1-9][0-9]{0,10}$%',stripslashes(trim($_SESSION['USER_ID']))))
        {
            $user_id = clean_input($_SESSION['USER_ID']);
        }
        else
        {
            $user_id = FALSE;
            $total_fav_message = "Invalid data entry";
        }
    }

        //get total item count
        $user_fav_count = mysqli_query($conn, "SELECT * FROM fav_items WHERE user_id='$user_id'") or trigger_error("fav items acquisition query failed");
        if(mysqli_num_rows($user_fav_count) > 0)
        {
            $total_fav_count = mysqli_num_rows($user_fav_count);
        }


}
//echo total favorites count
echo json_encode(array('fav_total'=>$total_fav_count));

?>