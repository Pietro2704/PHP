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
  for($i = 1; $i<=10; $i++){
    echo $i;
  }
  echo "<br>";
  echo "<hr>";
  for($a = 10; $a>=1; $a--){
    echo "$a ";
  }
  echo "<br>";
  echo "<hr>";
  for($b = 1; $b<=200; $b+=5){
    echo $b;
    echo " | ";
  }
  ?>
  <hr>
  <?php

    if(isset($_GET["submit"])){
      $n = isset($_GET["num"])?$_GET["num"]:2;
      $divisores = 0;
    
      for($count=2; $count<$n; $count++){
        if($n % $count == 0){
          echo "Multiplo de $count<br>";
          $divisores++;
        }
      }
  
      if($divisores){
        echo "$n não é primo, tem $divisores divisores além de 1 e ele mesmo";
      }
      else{
        echo "$n é primo!";
      }
    }
  
 ?>
</body>
</html>