<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <h1>Exemplo de PHP</h1>
  <?php
  date_default_timezone_set("America/Sao_Paulo"); // Muda a Time Zone para o Brasil (GMT -3)

  echo "<h3>Hoje é dia " . date("D/m/y") . "</h3>"; // função date() para dia

  echo "E são " . date("G:i:s"); // função date() para hora
  ?>
</body>

</html>