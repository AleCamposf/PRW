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
?>
<?php
    $n = readline();

    while($n > 0){
        $input = readline();
        $input = explode(" ", $input);
    	$input = array_reverse($input);
    	$input = implode(" ", $input);
    	
    	$replace = array("P", "F", "T", "R", "F", "J", "X");
    	$forreplace = array("B", "V", "D", "L", "S", "Z", "S");
    	$input = str_replace($replace, $forreplace, $input);
    	
    	print($input."\n");
    	$n--;
    }
?>
<?PHP
$N = fgets(S);
$i = 0;

while($i<$N){
    //$p = array();
    $p = explode(" ", readline());
    $p = array_reverse($p);
    $p = implode(" ", $p);
    
    $p = str_replace('P', 'B', $p);
    $p = str_replace('F', 'V', $p);
    $p = str_replace('T', 'D', $p);
    $p = str_replace('R', 'L', $p);
    $p = str_replace('J', 'Z', $p);
    $p = str_replace('X', 'S', $p);
    /*
    $t = count($p);
    $a = '';
    for($b = 0;$b<$t;$b++){
        $a .= $p[$b]." ";
    }
    $a = trim($a);
    */
    echo "$p\n";
    $i++;
}

?>