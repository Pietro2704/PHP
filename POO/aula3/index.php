<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    <?php

      require_once 'Caneta.php';

      $c1= new Caneta("BIC","Azul","0.5"); // MÉTODO CONSTRUCT RECEBE 3 PARÂMETROS

      print_r($c1); // mostre como está a caneta

      print("<br>Eu tenho uma caneta de ponta {$c1 -> getPonta()} da marca {$c1->getModelo()} e é da cor {$c1->getCor()}");


      /*
      $c1 -> modelo = 'BIC'; - não funciona
      $c1 -> setModelo('BIC'); - Agr funciona

      $c1 -> ponta = 0.5; - não funciona
      $c1 -> setPonta('0.5'); - Funciona

      */

      


    ?>
  </pre>
    
</body>
</html>