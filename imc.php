<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Resultado do IMC</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do peso e altura do formulário
    $peso = floatval($_POST["peso"]);
    $altura = floatval($_POST["altura"]);

    // Verifica se os valores são válidos
    if ($peso <= 0 || $altura <= 0) {
        echo "<p>Por favor, insira valores válidos para peso e altura.</p>";
    } else {
        // Calcula o IMC
        $imc = $peso / ($altura * $altura);

        // Exibe o resultado do IMC
        echo "<h3>Seu IMC é: " . number_format($imc, 2) . "</h3>";
    }
}
?>
<br>
<a href="index.html">Voltar</a> <!-- Adicione um link para voltar à página anterior -->
</body>
</html>
