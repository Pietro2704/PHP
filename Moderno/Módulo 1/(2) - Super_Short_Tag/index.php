<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados do Servidor</title>
  <style>
    h1 {
      width: fit-content;
      margin: auto;
      margin-block: 50px;
    }
  </style>
</head>

<?php
/*
    <?php ?> -- Super Tag PHP
    <?= ?> -- short Tag PHP
    <?  ?> -- short open tag     (Não se usa mais)
    <%  %> -- ASP Tag           (Não se usa mais)

  */
?>

<body>

  <h1>Dados do Servidor</h1>

  <?= phpinfo();  ?>
</body>

</html>