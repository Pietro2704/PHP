<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Trabalhando com variáveis</title>
</head>
<body>

<h1>Variáveis</h1>

  <?php 
  $num = 28.5;
  $nome = "<p>Pietro";
  $idade = 20;
  $solteiro = true;
  $casado = false;

  echo "$nome é uma variável</p>"; // Funciona mesmo com tags HTML

  echo "$num também"; // Não precisa especificar a variavel

  //true retorna 1 e false retorna 0
  echo "<br><br>Quando a variável é booleano, se for verdadeira retorna $solteiro"; 

  ?>

  <hr>

  <?php 

  echo "<h2>Jeitos de printar a variavel na tela</h2>";

  $num = 20;
  $nome = "Pietro";

  echo $nome. " tem ". $num. " anos!"; //Concatenando
  echo "<br><br>$nome tem $num anos!"; //Tudo junto
  print "<br><br>$nome tem $num anos!"; //Print

  ?>
  <hr>

  <?php
  echo "<h2>Forçando Typecast errado</h2>";

  $nome = (int) "Meu nome é Gustavo ";
  echo $nome;

  $amigo = (float) 18;
  echo "<br><br> tenho $amigo amigos";

  $idade = (bool) 20;
  echo "<br><br>E $idade anos";
  
  ?>
</body>
</html>