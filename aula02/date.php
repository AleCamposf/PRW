<?php 
// Fuso horario de são paulo 0
date_default_timezone_set('America/Sao_Paulo');

echo "Dtata Atual: ". date('d/m/y')."<br>";
echo "Dtata Atual: ". date('d-m-y')."<br>";
echo "Dtata e hora atual: ". date('d/m/y H:m:s')."<br>";

$data_hoje = date('d/m/Y');

echo $data_hoje;

?>