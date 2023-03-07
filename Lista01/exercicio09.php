<?php
$nome = readline();
$salf= floatval(readline());
$total = floatval(readline());

$salt = $salf + $total * 0.15;

echo "TOTAL = R$ " . number_format($salt, 2, ".", "") . "\n";

?>