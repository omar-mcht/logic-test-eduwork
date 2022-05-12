<?php

$nilai = 5;

function faktorial($x){
	$angka = 1;
	$faktorial = 1;
	 while($angka <= $x){
		 $faktorial = $faktorial * $angka;
		 $angka = $angka + 1;
	 }
	  return $faktorial;
}

echo "Hasil faktorial dari $nilai adalah " . faktorial($nilai);

?>