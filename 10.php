<?php

cek_kabisat(2024);

function cek_kabisat($tahun){
    echo "Input = ".$tahun;
    echo "<br><br><hr><br>";
    echo "output = ";
    if (($tahun % 4) == 0) {
        echo "Tahun Kabisat";
    }else {
        echo "Bukan tahun kabisat";
    }
}



?>