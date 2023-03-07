<?php
list($cod, $n, $val) = explode(' ', trim(fgets(STDIN)));
list($cod1, $n1, $val1) = explode(' ', trim(fgets(STDIN)));

$valt = ($n * $val) + ($n1 * $val1);

echo "VALOR A PAGAR: R$ " . number_format($valt, 2, '.', '') . "\n";

?>