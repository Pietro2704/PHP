<!DOCTYPE html>
<html lang="pt-br">
  <?php
  $num = isset($_GET["numero"])?$_GET["numero"]:0;
  $op = isset($_GET["op"])?$_GET["op"]:1;
  ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  switch($op){
    case 1:
      $r = $num * 2;
      break;
    case 2:
      $r = $num**3;
      break;
    case 3:
      $r = sqrt($num);
      break;
  }
  echo $r;
  ?>
</body>
</html>