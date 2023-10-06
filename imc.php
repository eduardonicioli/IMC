<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Resultado do IMC</title>
</head>
<body>
    
<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / ($altura * $altura);


echo "<h2>Seu IMC é: $imc</h2>";

if($imc < 18.5){
    echo"<h3>Você está abaixo do peso</h3>";
}
elseif($imc >= 18.6 && $imc <= 24.99){
    echo"<h3>Você está no peso ideal!</h3>";
}
elseif($imc >= 25.0 && $imc <= 29.99){
    echo"<h3>Você está levemente sobrepeso</h3>";
}
elseif($imc >= 30.0 && $imc <=39.99){
    echo"<h3>Você está com obesidade I</h3>";
}
elseif($imc >=  35.0 && $imc <= 39.0){
    echo"<h3>Você está com obesidade II (severa)</h3>";
}
else{
    echo"<h3>Você está com obesiadade III (mormida)</h3>";
}

?>
<br>
<a href="index.html">Voltar</a> <!-- Adicione um link para voltar à página anterior -->
</body>
</html>
