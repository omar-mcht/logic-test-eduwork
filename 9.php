<?php

$input = array("1", "3", "4", "7", "8", "10", "12", "15", "19", "20", "100", "1000");


echo "Nilai Input Array = [";
foreach ($input as $key => $value) {
    echo $value . " ";
}
echo "]";
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";


function maxx($array){
    $maxx = 0;
    foreach ($array as $value) {
        if ($value > $maxx) {
            $maxx = $value;
        }
    }
    return $maxx;
};
function minn($array){
    $minn = 9999999;
    foreach ($array as $value) {
        if ($value < $minn) {
            $minn = $value;
        }
    }
    return $minn;
}
echo "Nilai Terendah = ". minn($input). "<br>";
echo "Nilai Tertinggi = ".maxx($input);


?>