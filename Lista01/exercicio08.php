<?php
$nome = readline ();
$hrstrab = readline ();
$pagahr = readline ();
$sal = number_format ($hrstrab*$pagahr,2,".","");

echo "NUMBER = $nome\n";
echo "SALARY = U$ $sal\n";
?>