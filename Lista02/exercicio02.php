<?php 
$linha = readline();
$v1 = explode(" ",$linha);

$delta = ($v1[1] * $v1[1])-(4*$v1[0]*$v1[2]);
if(($delta >= 0) and ($v1[0] > 0)) {
        $x1 = number_format(((($v1[1]*-1) +))/(2*$v1[0])),5,".","");
        $x2 = number_format(((($v1[1]*-1) - (sqrt($delta)))/(2*$v1[0])),5,".","");
      
        echo "R1 = $x1\n";
        echo "R2 = $x2\n";

    }
    else {
        echo "Impossivel calcular\n";
    }


    

?>