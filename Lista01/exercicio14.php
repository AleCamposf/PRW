<?php
$n = intval (trim (fgets(STDIN)) );
$n1 = floatval (trim (fgets(STDIN)) );

$consu = $n / $n1;

echo number_format($consu, 3, '.', '') . " km/l\n";
?>