<?php


$entrada = fgets(STDIN);
$aux = 0;


While ($aux<$entrada){
    //Condicionar variavel para ficar do jeito que eu desejo
    $letra = explode(" ", readline());
    $letra = array_reverse($letra);
    $letra = implode(" ", $letra);
    
    $letra = str_replace('P', 'B', $letra);
    $letra = str_replace('F', 'V', $letra);
    $letra = str_replace('T', 'D', $letra);
    $letra = str_replace('R', 'L', $letra);
    $letra = str_replace('J', 'Z', $letra);
    $letra = str_replace('X', 'S', $letra);
    
    echo "$letra\n";
    $aux++;
}
?>

<?PHP
$entrada = fgets(STDIN);
$aux = 0;

while($aux < $entrada){
    
    //modifica a variavel
    $letra = explode(" ", fgets(STDIN));
    $letra = array_reverse($letra);
    $letra = implode(" ", $letra);
    

    $letra = str_replace('P', 'B', $letra);
    $letra = str_replace('F', 'V', $letra);
    $letra = str_replace('T', 'D', $letra);
    $letra = str_replace('R', 'L', $letra);
    $letra = str_replace('J', 'Z', $letra);
    $letra = str_replace('X', 'S', $letra);
   
    
    echo $letra,"\n";
    $aux++;
}
?>