<?php

define('SAFE_WORD','INANA302527#');

$encry_safeword = md5(SAFE_WORD);

if(stripslashes(trim($encry_safeword) == stripslashes(trim($_GET['ui_del']))))
    echo "They match";
else
    echo "They dont match ".$_SESSION['USER_ID'];


?>