<?php


$match = 'cosmetics';

if(preg_match('%^[a-z]{5,10}$%',$match))
    echo "Match";
else
    echo "No Match";

?>