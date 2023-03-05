<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      font-family: Arial;
      /*margin: 0;
      padding: 0;*/
    }
  </style>
</head>
<body>
  <?php

    require_once 'Alexa.php';

    $c1 = new Alexa;
    $c1 -> abrirMenu();
    
    $c1 -> Ligar();
    $c1 -> abrirMenu();

    $c1 -> Tocar();
    $c1 -> Aumentar(20);
    $c1 -> abrirMenu();
    
    $c1 -> Mudo();
    $c1 -> Desmute();
    $c1 -> abrirMenu();

    $c1 -> Desligar();
    //$c1 -> Diminuir(20);

    //print_r($c1);
    
  ?>
  
    
</body>
</html>