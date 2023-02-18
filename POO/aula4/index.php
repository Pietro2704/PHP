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

      require_once 'ContaBanco.php';

      $c1 = new ContaBanco;
      $c1 -> setNumConta(42069);
      $c1 -> abrirConta("Pietro","CP");
      $c1 -> depositar(150);
      //$c1 -> sacar(500);
      $c1 -> pagarMensal();
      $c1 ->sacar(280);
      $c1->fecharConta();

      
      print_r($c1);

      $c2 = new ContaBanco;
      $c2 -> setNumConta(22);
      $c2 -> abrirConta('Enzo','CC');
      $c2 -> depositar(150);
      $c2 -> pagarMensal();
      $c2 -> sacar(188);
      $c2->fecharConta();

      
      print_r($c2);
      
    ?>
  </pre>
    
</body>
</html>