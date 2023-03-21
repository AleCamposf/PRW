<?php
date_default_timezone_set('America/Sao_Paulo');

$data = date('d/m/Y H:m:s');
$dia = substr($data, 0, 2);
echo "Dia: ".$dia."<br>";


$mes = substr($data, 3, 2);
echo "Mes: ".$mes."<br>";

$ano = substr($data, 6, 4);
echo "Ano: ".$ano."<br>";




$hora = substr($data, 11, 2);
echo "hora: ".$hora."<br>";

$minuto = substr($data, 14, 2);
echo "minuto: ".$minuto."<br>";

$seg = substr($data, 17, 2);
echo "Segundos: ".$seg."<br>";


?>