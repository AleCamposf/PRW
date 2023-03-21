<?php
//trim - remove espaços do inicio e fim
//strlen - retorna o numero de caracteres
$str = "  IFSP Birigui  ";
 
echo "Tamanho: ".strlen($str)."<br>";

$str = trim($str);

echo "Tamanho: ".strlen($str)."<br>";



?>