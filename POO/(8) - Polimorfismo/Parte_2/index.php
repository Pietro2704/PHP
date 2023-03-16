<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- 

    PHP NÃO SUPORTA O POLIMORFISMO DO TIPO SOBRECARGA, POIS NÃO É POSSÍVEL DECLARAR O TIPO DA VARÍAVEL

    PARA SUPRIR A NECESSIDADE, UTILIZAREMOS OUTRO JEITO

   -->
</head>
<body>
  <?php 
  require_once "Mamifero.php";
  require_once "Lobo.php";
  require_once "Cachorro.php";

  $m = new Cachorro();
  $m -> emitirSom();
  $m -> reagirFrase("dawda");

  ?>
</body>
</html>