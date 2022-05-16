<?php

$n = 30;
echo "Jumlah = ".$n."<br><br>";

foreach(range(1, $n) as $value) {
    if ($value % 3 != 0 && $value % 5 != 0) {
      echo $value . '<br>';
      continue;
    }
    if ($value % 3 == 0) echo 'Edu';
    if ($value % 5 == 0) echo 'Work';
    echo '<br>';
  }


?>