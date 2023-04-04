<?php
$num = fgets(STDIN);
$ho = '';

$i = 0;

    while ($i<$num) {
        $ho .= 'Ho ';
        $i++;
    }


$ho = trim($ho);

echo "$ho!\n";
?>