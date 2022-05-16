<?php

$input = array(1, 3, 4, 7, 8, 10, 12, 15, 19, 20);
$low = 3;
$high = 18;

echo "Nilai Input Array = [";
foreach ($input as $key => $value) {
    echo $value . " ";
}
echo "]";
echo "<br>";
echo "Nilai Int Low = ". $low . "<br>";
echo "Nilai Int High = ". $high . "<br>";

echo "<br>";
echo "<hr>";
echo "<br>";

echo "Output = [";
foreach ($input as $key => $value) {
    if ($value > $low and $value < $high) {
        echo $value . " ";
    }
}
echo "]";
?>