<?php 

$a = fgets(STDIN);
$b = fgets(STDIN);

$med = number_format (( $a*3.5+$b*7.5) /11,5,".","");

echo "MEDIA = $med\n"

?>