<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
  <?php 
    // Requerindo Classe
    require("Pessoa.php");

    // Facilitando a criação do objeto
    $person = array();
    $person[] = new Pessoa("Pietro",20,"Masculino");

    //Apresentando cada pessoa
    for($i=0;$i<=count($person)-1;$i++){
      $person[$i] -> apresentar();
    }

    $person[0] -> fazerNiver();

  ?>
  </pre>
</body>
</html>