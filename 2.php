<?php

function balikkata($kata){
    $count = strlen($kata);
    for($i=$count; $i >=0; $i--){
    $dibalik = substr($kata, $i, 1);
    echo $dibalik;
    }
} 

$nilai = "makan ku loh" ;

echo "Kata \"$nilai\" jika dibalik jadi => ";
echo balikkata("$nilai");

?>