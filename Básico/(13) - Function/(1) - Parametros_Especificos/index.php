<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entendendo função</title>
</head>
<body>

  <?php
  function Somar($a, $b){
    $s = $a + $b;
    echo "<p>A soma de $a + $b = $s</p>";
  }

  Somar(3,4);
  Somar(8,2);

  $x = 10;
  $y = 20;
  Somar($x, $y);
  ?>



  <?php
    function Add($a, $b){
      $s = $a + $b;
      return $s;
    }
    $res = Add(22,34);
    echo $res;
    echo "<br>";
  ?>


</body>
</html>