<?php

$nilai = "98.22@1"; //isi nilainya disini
echo "Nilai String = " . $nilai . '<br><br>';

function digitValue($value){
    $angka = preg_replace("/[^0-9]/", "", $value);
    $panjang = strlen($angka);
    $str = strval($angka);
    $arrnum = str_split($str);

    echo $angka.'<br>';
    foreach ($arrnum as $key => $value) {
        $a = $panjang - 1 - $key;
        echo $value;
        for ($i=0; $i < $a ; $i++) { 
            echo '0';
        }
        echo '<br>';
    }
    echo "<br>" .$angka. "<br>";
    echo $panjang. "<br>";
    echo "jadi " .$angka;
    

}
 echo digitValue($nilai);

?>