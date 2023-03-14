<?php 

$v1 = readline();


if (($v1 <= 100) && ($v1 >= 0)) 
{
if (($v1 >= 0) and ($v1 <= 25)) 
{
    echo "Intervalo [0,25]\n";
}

if (($v1 > 25) and ($v1 <= 50)) 
{
    echo "Intervalo (25,50]\n";
}

if (($v1 > 50) and ($v1 <= 75)) 
{
    echo "Intervalo (50,75]\n";
}

if (($v1 > 75) and ($v1 <= 100)) {
    echo "Intervalo (75,100]\n";
}

} 

else {
    echo "Fora de intervalo\n";
}

?>