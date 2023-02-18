<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Operadores Lógicos</title>
</head>
<body>
  <h1>Operadores Logicos</h1>
  <h3>Exercicio</h3>
  <?php
  echo "<h3>Coloque no final da URL ('.../?ano= seu ano de nascimento')</h3>";
  $nasc = $_GET["ano"];
  $idade = 2022 - $nasc;
  $tipo = $idade>=18 && $idade<65 ? "é OBRIGATÓRIO":"não é OBRIGATÓRIO";
  echo "Quem nasceu no ano $nasc, tem $idade anos, portanto o voto $tipo";
  ?>
</body>
</html>