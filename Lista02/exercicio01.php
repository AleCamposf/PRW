<?php 

$linha = readline();
$v1 = explode(" ",$linha);

if (($v1[1] > $v1[2]) & ($v1[3] > $v1[0]) & ($v1[2] + $v1[3] > $v1[0] + $v1[1])
& ($v1[2] > 0) & ($v1[3] > 0) &  (($v1[0]%2) == 0)){
        echo "Valores aceitos\n";
} 
else {
    echo "Valores nao aceitos\n";
}

?>