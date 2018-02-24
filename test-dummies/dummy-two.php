<?php


$test = md5(uniqid(rand()))."-11";

echo $test;

if(preg_match('/^[a-z0-9]{32}+\-[1-9][0-9]{0,10}$/',$test))
    echo "It matches";
else
    echo "Doesnt match";

?>