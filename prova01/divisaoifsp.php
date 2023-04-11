<?php 

$consul = fgets(STDIN);
$coordeLO = [1];
$coordeNS = [1];




?>


<?php
  while(true){
    $n = readline();
    
    if($n == 0) break;
    
    $fil = readline();
      
    $fil = explode(" ", $fil);
    $xd = intval($fil[0]);
    $yd = intval($fil[1]);
      
    for($i = 0; $i < $n; $i++){
      
      $sel = readline();
      
      $sel = explode(" ", $sel);
      $xr = intval($sel[0]);
      $yr = intval($sel[1]);
      
      if($xd == $xr || $yd == $yr) print("divisa\n");
      else if($xr > $xd){
        if($yr > $yd) print("NE\n");
        else print ("SE\n");
      }else{
        if($yr > $yd) print("NO\n");
        else print ("SO\n");
      }
    }
  }

<?php
$entrada = fgets(STDIN);


while($aux<$entrada){

    $letra = explode(" ", fgets(STDIN));
    $letra = array_reverse($letra);
    $letra = implode(" ", $letra);
    
    $letra = str_replace('P', 'B', $letra);
    $letra = str_replace('F', 'V', $letra);
    $letra = str_replace('T', 'D', $letra);
    $letra = str_replace('R', 'L', $letra);
    $letra = str_replace('J', 'Z', $letra);
    $letra = str_replace('X', 'S', $letra);
    
    echo "$letra","<br>";
    $aux++;
}

?>