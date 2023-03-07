<?php
$val = (int) fgets(STDIN);

$A = (int) ($val / 100);
$B = $val % 100;


$C = (int) ($B / 50);
$D = $B % 50;


$E = (int) ($D / 20);
$F = $D % 20;


$G = (int) ($F / 10);
$H = $F % 10;


$I = (int) ($H / 5);
$J = $H % 5;


$K = (int) ($J / 2);
$L = $J % 2;

echo "$val\n";
echo "$A nota(s) de R\$ 100,00\n";
echo "$C nota(s) de R\$ 50,00\n";
echo "$E nota(s) de R\$ 20,00\n";
echo "$G nota(s) de R\$ 10,00\n";
echo "$I nota(s) de R\$ 5,00\n";
echo "$K nota(s) de R\$ 2,00\n";
echo "$L nota(s) de R\$ 1,00\n";
?>