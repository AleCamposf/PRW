<?php
$id = intval (fgets (STDIN) );
$anos = floor ($id / 365);
$mes = floor ( ($id % 365) / 30);
$dias = ($id % 365) % 30;

echo "$anos ano(s)\n$mes mes(es)\n$dias dia(s)\n";
?>
