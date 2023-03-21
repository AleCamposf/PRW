<?php

$data = date('d/m/Y');
echo $data."<br>";
$d = explode('/',$data);

echo "Dia: ".$d[0]."<br>";
echo "Mes: ".$d[1]."<br>";
echo "Ano: ".$d[2]."<br>";
// Utilizar "Explode" para separar as palavras utilizando "/"

$str = "IFSP Campus Birigui";
$e = explode(' ', $str);

echo "Instituição: ".$e[0]."<br>";
echo "Distribuição: ".$e[1]."<br>";
echo "Região: ".$e[2]."<br>";



?>