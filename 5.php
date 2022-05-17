<?php


konversi_angka(100);

function konversi_angka($angka){
    $konversi = array("Puluh", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "100");
    $panjang = strlen($angka);
    
    echo "Input Angka = ". $angka ."<br><br><hr><br>";
    echo "Output Huruf = ";
    if ($angka == 100) {
        echo "Seratus";
    }elseif ($angka == 0) {
        echo "Silahkan masukkan bilangan antara 1-100";
    }elseif ($angka == 10) {
        echo "Sepuluh";
    }elseif ($angka == 11) {
        echo "Sebelas";
    }
    elseif ($angka > 11 and $angka < 20) {
        $a = substr($angka, 1, 1);
        echo $konversi[$a]. " Belas"; 
    }elseif ($panjang == 2 AND substr($angka, 1, 1) > 0) {
        $a = substr($angka, 0, 1);
        $b = substr($angka, 1, 1);
        echo $konversi[$a] . " Puluh ";
        echo $konversi[$b];
    }elseif ($panjang == 2) {
        $a = substr($angka, 0, 1);
        $b = substr($angka, 1, 1);
        echo $konversi[$a] . " ";
        echo $konversi[$b];
    }else {
        echo "Silahkan masukkan bilangan antara 1-100";
    }

}



?>