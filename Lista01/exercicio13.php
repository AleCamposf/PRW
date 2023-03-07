<?php
list($n, $n1, $n2) = explode(' ', trim(fgets(STDIN)));

$maior1 = ($n + $n1 + abs($n - $n1)) / 2;
$maior2 = ($maior1 + $n2 + abs($maior1 - $n2)) / 2;
echo $maior2 . " eh o maior\n";
?>