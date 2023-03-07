<?php
$temp = intval (fgets (STDIN) );
$hrs = intval ($temp / 3600);
$min = intval ( ($temp % 3600) /60);
$seg = $temp % 60;

echo $hrs.":".$min.":".$seg."\n";

?>