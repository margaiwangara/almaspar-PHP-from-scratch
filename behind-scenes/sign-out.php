<?php

session_start();

if(!empty($_SESSION['USER_EMAIL']))
{
    /*
    echo "<div style='color: brown;font-weight: bolder;font-size: 30px;font-family: cambria;position: absolute;
    top: 30%;left: 22%;'> You have <strong>Signed Out</strong> successfully. Redirecting to <strong>Homepage</strong>...</div>";
    */
    header("Refresh:3;url = /../almas-parlour/index.php");
    session_destroy();

}


?>