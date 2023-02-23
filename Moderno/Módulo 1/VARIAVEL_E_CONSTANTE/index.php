<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variaveis</title>
</head>

<body>
  <?php
  /*
  - Variáveis sempre começam com o símbolo $
  - O segundo caractere (dps do cifrão) pode ser letra ou o símbolo _
  - Aceita caracteres [a-z], [A-Z], [0-9] e [_]
  - Aceita qualquer caracter da tabela ASCII a partir de 128
  - Aceita caracteres acentuados como á, õ, ç...
  - A linguagem é case sensentive
  - Nomes especiais como $this não podem ser usados
  */


  // PODEMOS USAR DEFINE OU CONST PARA DEFINIR UMA CONTANTE
  define("NOME", "Pietro");
  const SOBRENOME = "Rosolia"; // RECOMENDADA

  // DEFININDO VARÍAVEIS
  $idade = 20;
  $regiao = "Brasil";

  // PRINTANDO NA TELA
  echo "<p>Meu nome é " . NOME . " " . SOBRENOME . " tenho $idade anos e moro no $regiao</p>";

  ?>
</body>

</html>