<?php
list($n, $n1, $n2) = explode(' ', trim(fgets(STDIN)));

$atri = ($n * $n2) / 2;
$acir = 3.14159 * pow($n2, 2);
$atra = (($n + $n1) * $n2) / 2;
$aqua = pow($n1, 2);
$areta = $n * $n1;

echo "TRIANGULO: " . number_format($atri, 3, '.', '') . "\n";
echo "CIRCULO: " . number_format($acir, 3, '.', '') . "\n";
echo "TRAPEZIO: " . number_format($atra, 3, '.', '') . "\n";
echo "QUADRADO: " . number_format($aqua, 3, '.', '') . "\n";
echo "RETANGULO: " . number_format($areta, 3, '.', '') . "\n";
?>