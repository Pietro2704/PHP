<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    require_once 'Caneta.php';

    $c1= new Caneta;
    $c1 -> cor = 'Azul';
    $c1 -> ponta = '0.5';
    $c1 -> tampada = false;

    $c2= new Caneta;
    $c2->cor='Vermelho';
    $c2->ponta='1';
    $c2->carga='50';
    
    
    print_r($c1);
    echo "<br></br>";
    print_r($c2);

    $c1->tampar();

    $c1->rabiscar();

    $c2->rabiscar();

  ?>
  
</body>
</html>