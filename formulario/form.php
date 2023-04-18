<?php

$nome = $_GET['nome'];
$idade = $_GET['idade'];

echo "<h1>$nome</h1>";
echo "<h1>$idade</h1>";
echo "<input value=$idade>";
if (strlen($nome)<20){
    echo "<h3>Nome deve conter no minimo 20 caracteres </h3>";
}
if ($idade>18){

echo"<h3>Aluno maior de idade</h3>";

}else{
echo "<h3> aLUNO MENOR DE IDADE</h3>";

}




?>
<a href='form.html'><button>Voltar</button>