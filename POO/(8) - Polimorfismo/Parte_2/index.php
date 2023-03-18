<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  require_once "Mamifero.php";
  require_once "Lobo.php";
  require_once "Cachorro.php";

  $m = new Cachorro();

  $m -> emitirSom();
  echo "<hr>";

  $m -> reagirFrase("Comida");
  echo "<hr>";

  $m -> reagirDono(false);
  echo "<hr>";

  $m -> reagirHora(11,45);
  $m -> reagirHora(21,00);
  echo "<hr>";

  $m -> reagirIdadePeso(2,12.5);
  $m -> reagirIdadePeso(17,4.5);

  ?>
</body>
</html>