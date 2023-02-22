<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Varieveis</title>
</head>

<body>
  <?php
  // PODEMOS USAR DEFINE OU CONST PARA DEFINIR UMA CONTANTE
  define("NOME", "Pietro");
  const SOBRENOME = "Rosolia";

  // DEFININDO VARÍAVEIS
  $idade = 20;
  $regiao = "Brasil";

  // PRINTANDO NA TELA
  echo "Meu nome é " . NOME . " " . SOBRENOME . " tenho $idade anos e moro no $regiao";

  ?>
</body>

</html>