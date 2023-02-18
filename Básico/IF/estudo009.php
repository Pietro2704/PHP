<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicional If</title>
</head>
<body>
  <?php

  $ano = $_GET["ano"];
  $idade = date("Y") - $ano;
  echo "Você nasceu em $ano, portanto tem $idade anos<br>";

  if ($idade>=18 && $idade<=64){
    echo "Com essa idade, seu voto é Obrigátorio";
  }

  elseif(($idade>=16 && $idade<18) || ($idade>64)){
    echo "Com essa idade, seu voto é Opcional";
  }
  
  else{
    echo "Muito novo para qualquer coisa";
  }

  ?>
</body>
</html>