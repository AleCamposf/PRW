<?php
$velmed = floatval(fgets(STDIN));
$disvi = floatval(fgets(STDIN));
$consul = floatval(fgets(STDIN));

$hrs = number_format(($disvi/$velmed),2,".","");

$valgas = number_format(($disvi/$consul),2,".","");



echo  "Total horas: $hrs\n";
echo "Total combustivel: $valgas\n";
?>
