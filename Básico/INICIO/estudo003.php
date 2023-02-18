<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Operadores Aritméticos</title>
</head>
<body>
<h1>Operadores Aritméticos</h1>
  <?php
  $a = 9;
  $b = 4;
  $c = 5.666;

  $som = $a + $b;
  $sub = $a - $b;

  $submin = $b - $a;
  $d = $a/$b;
  $m = $a * $b;
  $r = $a % $b;

  echo "A <strong>soma</strong> entre $a e $b é $som!"; 
  echo "<br><br>A <strong>subtração</strong> entre $a e $b é $sub";
  echo "<br><br>A <strong>subtração</strong> entre $b e $a é $submin";
  echo "<br><br>A <strong>divisão</strong> entre $a e $b é $d";
  echo "<br><br>O <strong>resto da divisão</strong> entre $a e $b é $r";
  echo "<br><br>A <strong>multiplicação</strong> entre $a e $b é $m";


  echo "<br><br>O valor absoluto da subtração entre $b e $a é " .abs($submin);
  echo "<br><br>O valor de $a <sup>$b</sup> é " .pow($a,$b);
  echo "<br><br>A raíz quadrada de $a é " .sqrt($a). " e a raíz quadrada de $b é " .sqrt($b);
  echo "<br><br>O valor de $c arredondado é " .round($c). ", arredondando para cima fica " .ceil($c). " e arredondando para baixo fica " .floor($c);
  echo "<br><br>A parte inteira de $c é " .intval($c);
  echo "<br><br>O valor de $c em moeda é R$ " .number_format($c, 2);
  echo "<br><br>Já o valor de $a em moeda é R$ " .number_format($a, 2);

  ?>
  <hr>

  <?php 
  echo "<h2>Variaveis com o modo GET</h2>";
  echo "<h4>No final da URL digite: '.../?a=num&b=num' sendo num os numeros desejados</h4>";

  $a = $_GET["a"];
  $b = $_GET["b"];
  
  $som = $a + $b;
  $sub = $a - $b;
  $submin = $b - $a;
  $d = $a/$b;
  $m = $a * $b;
  $r = $a % $b;

  echo "A soma entre $a e $b é $som!";
  echo "<br><br>A subtração entre $a e $b é $sub";
  echo "<br><br>A subtração entre $b e $a é " .$submin;
  echo "<br><br>A divisão entre $a e $b é $d";
  echo "<br><br>O resto da divisão entre $a e $b é $r";
  echo "<br><br>A multiplicação entre $a e $b é $m";
  echo "<hr>";
  
  ?>

  
</body>
</html>