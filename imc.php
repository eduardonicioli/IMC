<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

    <title>Resultado do IMC</title>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
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
            </div>    
        </div>
    </div> 
</div>
<br>
<a href="index.html">Voltar</a> <!-- Adicione um link para voltar à página anterior -->
</body>
</html>
