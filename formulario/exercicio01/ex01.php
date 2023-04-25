<?php
    $numero01 = $_POST["numero01"];
    $numero02 = $_POST["numero02"];
    $opera = $_POST["opere"];

    if($opera == "soma") echo $numero01+$numero02;
    if($opera == "subtra") echo $numero01-$numero02;
    if($opera == "divi") echo $numero01/$numero02;
    if($opera == "mult") echo $numero01*$numero02;
?>