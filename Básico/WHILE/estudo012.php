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
  $n1 = $_GET["n1"];
  $n2 = $_GET["n2"];
  $inc = isset($_GET["inc"])?$_GET["inc"]:1;
  if($n1<$n2){
    while($n1<=$n2){
      echo $n1;
      echo "<br>";
      $n1 += $inc;
    }
  }
  elseif($n2<$n1){
    while($n2>0){
      echo $n2;
      echo "<br>";
      $n2-=$inc;
    }
  }
  else{
    echo "São Números Iguais";
  }
  ?>
</body>
</html>