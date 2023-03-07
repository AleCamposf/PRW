<?php
$temp = intval(readline());
$velme = intval(readline());
$dis = $temp * $velme;
$litros = $dis / 12;

echo number_format($litros, 3, '.', '') . "\n";

?>