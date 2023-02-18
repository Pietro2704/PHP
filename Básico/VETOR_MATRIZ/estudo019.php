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
  $v = array(9,7,8,5,6,3,4,1,2);
  print_r($v);
  echo "<hr>";


  asort($v);
  $count = count($v);
  echo "<br>Ele tem $count elementos CUJO INDICES ESTAO ASSOCIADOS e estão em ordem crescente <br>";
  print_r($v);
  echo "<hr>";

  echo "<br>"; //---------------------------------------------------------------------------------------

  arsort($v);
  $count = count($v);
  echo "<br>Agora ele tem $count elementos CUJO INDICES ESTAO ASSOCIADOS e estão em ordem decrescente <br>";
  print_r($v);
  echo "<hr>";

  echo "<br>"; //---------------------------------------------------------------------------------------

  ksort($v);
  $count = count($v);
  echo "<br>Agora ele tem $count elementos CUJO OS INDICES ESTÃO EM ORDEM CRESCENTE<br>";
  print_r($v);
  echo "<hr>";

  echo "<br>"; //---------------------------------------------------------------------------------------

  krsort($v);
  $count = count($v);
  echo "<br>Agora ele tem $count elementos CUJO OS INDICES ESTÃO EM ORDEM DECRESCENTE<br>";
  print_r($v);
  echo "<hr>";

  ?>
  </pre>
</body>
</html>