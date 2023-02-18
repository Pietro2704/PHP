<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML+PHP</title>
</head>
<body>
  <?php
  $nome = $_GET["nome"];
  $data_nasc = $_GET["data_nasc"];
  $sexo = $_GET["sexo"];
  $data = date("Y"); // Mostra o ano atual com 4 digitos
  $idade = $data - $data_nasc;

  echo "Seu nome é: $nome <br>";
  echo "Você tem $idade anos<br>";
  echo "E você é do gênero: $sexo";

  ?>
  
  <br>
  <a href="estudo007.html">Voltar</a>
</body>
</html>