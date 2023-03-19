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

      require_once "Video.php";
      require_once "AcoesVideo.php";
      require_once "Pessoa.php";
      require_once "Usuario.php";

      $v = array();
      $v[] = new Video("Cozinhando com o Chefe");
      $v[] = new Video("Programação para leigos");
      $v[] = new Video("Aprenda Kong-Fu em 5 HORAS");

      print_r($v);


      $u = array();
      $u[] = new Usuario("Enzo",16,"M","EzR");
      $u[] = new Usuario("Pietro",21,"M","PrT");
      $u[] = new Usuario("Andrea",57,"F","DeaR");
      $u[] = new Usuario("Ricardo",59,"M","Rica");

      print_r($u);


    ?>
  </pre>
</body>
</html>