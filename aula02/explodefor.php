<?php

$data = date('d/m/Y');
echo $data."<br>";
$d = explode('/',$data);

echo "Dia: ".$d[0]."<br>";
echo "Mes: ".$d[1]."<br>";
echo "Ano: ".$d[2]."<br>";
// Utilizar "Explode" para separar as palavras utilizando "/"

$str = "IFSP Campus Birigui bla bla";
$e = explode(' ', $str);
//count ele mostra quantos elementos existem em um vetor
for($i=0; $i<count($e); $i++){
echo $e[$i]."<br>";

}



?>