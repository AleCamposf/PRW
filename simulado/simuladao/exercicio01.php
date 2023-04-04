<?php
//Usa o Trim
$num = intval(trim(fgets(STDIN)));

$i = 0;


//Estrutura de Repetição
while($i<$num){

    //Usa Explode
    $var = explode(' ', strval(trim(fgets(STDIN))));
    $n = 0;
    $valA = $var[0];
    $valB = $var[1];
    $auxb = strlen($valB);

    //Auxiliadores de devolver strings inversas
    $stra = strrev($valA);
    $strb = strrev($valB);

        //IF comando de "E se"
            if (strlen ($valA) >= strlen ($valB) ){

     //Estrutura de Repetição
                for($x = 0; $x<$auxb;$x++){

                    if($strb[$i] == $stra[$i]){
                        $n++;
                } 
    
                    else {
                        $i++;
                    }

}

} 


if($n == $auxb){
 // Resultado
    echo "encaixa";
} 

    else {
        //Resultado
        echo "nao encaixa\n";
    }

//Finalização da Estrutura de Repetição
$a++;

}
?>