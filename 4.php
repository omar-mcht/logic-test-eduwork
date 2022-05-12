<?php

$a = 8;
$b = 1;

echo 'Input = <br>';
echo '$a = '. $a . '<br>';
echo '$b = '. $b . '<br><br>';

$a ^= $b;
$b ^= $a;
$a ^= $b;

 

echo 'Output = <br>';
echo '$a = '. $a . '<br>';
echo '$b = '. $b;
?>