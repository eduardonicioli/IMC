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
      <div class="col">
        <<div class="row-md-6">
          <img src="imc.jpg" alt="IMC" class="img-fluid">
            </div>
                <div class="row-md-6">

                    <?php

                    $peso = $_POST['peso'];
                    $altura = $_POST['altura'];
                    $imc = $peso / ($altura * $altura);


                    echo "<br><h4>O seu IMC é: $imc<br>";
                    

                    if($imc < 18.5){
                        echo"Você está abaixo do peso";
                    }
                    elseif($imc >= 18.6 && $imc <= 24.99){
                        echo"<br>Você está no peso ideal!";
                    }
                    elseif($imc >= 25.0 && $imc <= 29.99){
                        echo"<br>ocê está levemente sobrepes";
                    }
                    elseif($imc >= 30.0 && $imc <=39.99){
                        echo"<br>Você está com obesidade I";
                    }
                    elseif($imc >=  35.0 && $imc <= 39.0){
                        echo"<br>Você está com obesidade II (severa)";
                    }
                    else{
                        echo"<br>Você está com obesiadade III (mormida)";
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="container">
    <div class="col">
        <div class="row-md-6">
          <a href="index.html" class="btn btn-lg btn-secondary" >Voltar</a>
    </div>
</div>

<br>

</body>
</html>
