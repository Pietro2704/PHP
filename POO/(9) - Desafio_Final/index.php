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
      require_once "Usuario.php";
      require_once "Visualizacao.php";

      
      $v = array();
      $v[] = new Video("Cozinhando com o Chefe");
      $v[] = new Video("Programação para leigos");
      $v[] = new Video("Aprenda Kong-Fu em 5 HORAS");

      //print_r($v);


      $u = array();
      $u[] = new Usuario("Enzo",16,"M","EzR");
      $u[] = new Usuario("Pietro",21,"M","PrT");
      $u[] = new Usuario("Andrea",57,"F","DeaR");
      $u[] = new Usuario("Ricardo",59,"M","Rica");

      //print_r($u);



      $visu = array();

      $visu[] = new Visualizacao($u[0], $v[0]);
      $visu[0]->avalie();

      $visu[] = new Visualizacao($u[0], $v[1]);
      $visu[1]->darNota(9);

      $visu[] = new Visualizacao($u[0], $v[2]);
      $visu[2]->avaliarPorcentagem(75);


      $visu[] = new Visualizacao($u[1], $v[0]);
      $visu[] = new Visualizacao($u[1], $v[1]);
      $visu[] = new Visualizacao($u[1], $v[2]);

      $visu[] = new Visualizacao($u[2], $v[0]);
      $visu[] = new Visualizacao($u[2], $v[1]);
      $visu[] = new Visualizacao($u[2], $v[2]);

      $visu[] = new Visualizacao($u[3], $v[0]);
      $visu[] = new Visualizacao($u[3], $v[1]);
      $visu[] = new Visualizacao($u[3], $v[2]);
      
      print_r($u[1]);

      print_r($v[0]);
      print_r($v[1]);
      print_r($v[2]);

      
      


    ?>
  </pre>
</body>
</html>