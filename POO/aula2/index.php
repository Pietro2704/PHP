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

      $c1= new Caneta;
      $c1 ->modelo= 'BIC Cristal';
      $c1 -> cor = 'Azul';
      
      // nao consigo acessar esses atributos:

      //$c1 -> ponta = '0.5';
      //$c1 -> carga = 99;
      //$c1 -> tampada = false;
    
      print_r($c1);
      echo "<br></br>";
      
    ?>
    <?php

      //$c1->tampar();

      $c1->rabiscar(); // soh consigo acessar esse método

      //$c1->destampar();


    ?>
  </pre>
</body>
</html>