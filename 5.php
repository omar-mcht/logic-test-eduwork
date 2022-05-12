<?php

$konversi = array("Puluh", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "100");

$nilai = 24;
$panjang = strlen($nilai);
echo "Input Angka = ". $nilai ."<br><br><hr><br>";
echo "Output Huruf = ";
if ($nilai == 100) {
    echo "Seratus";
}elseif ($nilai == 0) {
    echo "Silahkan masukkan bilangan antara 1-100";
}elseif ($panjang == 1) {
    echo $konversi[$nilai];
}elseif ($panjang == 2) {
    $a = substr($nilai, 0, 1);
    $b = substr($nilai, 1, 1);
    echo $konversi[$a] . " ";
    echo $konversi[$b];
}else {
    echo "Silahkan masukkan bilangan antara 1-100";
}

?>