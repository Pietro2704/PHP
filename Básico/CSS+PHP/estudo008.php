<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php
    $texto = isset($_GET["t"]) ? $_GET["t"] : "Texto não encontrado";
    $tamanho = isset($_GET["tam"]) ? $_GET["tam"] : "Tamanho não encontrado";
    $cor = isset($_GET["cor"]) ? $_GET["cor"] : "Cor não encontrada";
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
  <style>
    span.texto{
      font-size: <?php echo $tamanho; ?>;
      color: <?php echo $cor; ?>;
    }
  </style>
</head>
<body>
  <?php
  echo "<span class='texto'>$texto</span>";
  ?>
</body>
</html>