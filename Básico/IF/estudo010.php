<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $n1 = $_GET["n1"];
  $n2 = $_GET["n2"];
  $media = ($n1 + $n2)/2;
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  if($media>=7 && $media=10){
    echo "Sua média foi $media, portanto está APROVADO";
  }
  elseif($media>=5 && $media<7){
    echo "Sua média foi $media, portanto está de RECUPERAÇÃO";
  }
  elseif($media<5 && $media>0){
    echo "Sua média foi $media, portanto está REPROVADO";
  }
  else{
    echo "MÉDIA INVÁLIDA";
  }
  ?>
  <br>
  <a href="estudo010.html">Voltar</a>
</body>
</html>