<?php

echo "Nama : Abi Nugroho <br/>";
echo "NIM : E41240724 <br/>";
echo "golongan : B <br/>";

$x = 2;

echo "<br/>tugas pertama <br/><br/>";

for($i = 1; $i <= 10; $i++) {
    echo $x . ' ';
    $x = $x * 2;
}

echo "<br/><br/>tugas kedua<br/><br/>";
$y = 12;

for($j = 1; $j <= 5; $j++) {
    echo $y . ' ';
    $y = $y * 2;
    echo $y . ' ';
    $y = $y + 1;
}
