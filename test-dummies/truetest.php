<?php


$item = "green";

if(preg_match('%^[a-zA-Z\s]+$%',$item))
    echo "Match";
else
    echo "No match";

?>