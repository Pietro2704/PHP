<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Operadores Relacionais</title>
</head>
<body>
<h1>Operadores Relacionais</h1>
  <?php
  echo "Maior e Menor ou Iguais: A=>B e A<=B";
  echo "<br><br>";
  echo "Diferente: A!=B ou A<>B";
  echo "<br><br>";
  echo "Igual: A==B";
  echo "<br><br>";
  echo "Idêntico: A===B";//Igual e do mesmo tipo
  echo "<br><br>";
  ?>
  <hr>
  <h2>Operador Ternario</h2>
  <?php

  /*Se (A>B) entao
      Maior <- A
    Senao
      Maior <-B*/


  $a = 5;
  $b = 8;
  echo "Se A for maior que B, mostrará 5, senão mostrará 8: <br>";
  $maior = $a>$b ? $a : $b;
  echo $maior;

  $a = 3;
  $b = "3";
  $r = ($a==$b)?"Sim":"Não";
  echo "<br><br>O numero 3 é exatamente igual a uma string contendo o numero 3? $r";
  $r = ($a===$b)?"Sim":"Não";
  echo "<br><br>O numero 3 é identico a uma string contendo o número 3? $r";
  ?>

  <?php
  echo "<h4>Coloque na URL um valor para n1 e n2 ('.../?n1=num&n2=num/')</h4>";
  $n1 = $_GET["n1"];
  $n2 = $_GET["n2"];
  $media = ($n1 + $n2)/2;
  $sit = $media>=7?"passou":"reprovou";
  echo "Com as notas $n1 e $n2, você obteve uma média de $media, portanto você " . ($media>=7?"passou":"reprovou");
  ?>
</body>
</html>