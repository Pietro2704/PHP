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
  $num = $_GET["num"];
  $fat = $num;
  $c = 1;

  do{
    $fat = $fat*($num-$c);
    $c++;
  }while(($num-$c)>0);

  echo "<h2>O fatorial de $num é $fat</h2>";
  
  ?>
  <hr>
  <h1>Crescendo</h1>
  <?php
  $c = 1;
  do{
    echo $c;
    $c++;
    echo "<br>";
  }while($c<11);
  ?>
 <hr>
 <h1>Decrescendo</h1>
<?php
  $c = 20;
  do{
    echo $c;
    $c--;
    echo "<br>";
  }while($c>=3);
  ?>
  <hr>
</body>
</html>