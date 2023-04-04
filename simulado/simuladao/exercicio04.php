<?php
$linha = fgets(STDIN);
$coluna = fgets(STDIN);

if ((($coluna+$linha)%2)==0){

    $resul = 1;
    echo "$resul\n";

} 

else {

    $resul = 0;
    echo "$resul\n";
    
}

?>