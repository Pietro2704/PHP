<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    *{
      font-family: Arial;
      /*margin: 0;
      padding: 0;*/    
    }
  </style>
  
</head>
<body>
  <pre>

  <?php
  require("Lutador.php");
  $lut = array();
  $lut[] = new Lutador("Thor","Asgard",3000,1.80,120,0,0,0);
  $lut[] = new Lutador("Tony Stark","Nova Iorque",44,1.75,90,0,0,0);
  $lut[] = new Lutador("Hulk","Nova Iorque",28,2.50,120,0,0,0);
  $lut[] = new Lutador("Wong","Kamartaj",58,1.65,72,0,0,0);
  $lut[] = new Lutador("Steve Rogers","Brooklin",110,1.85,100,0,0,0);
  $lut[] = new Lutador("Peter Parker","Queens",17,1.70,70,0,0,0);

  //print_r($lut);

  for($i=0; $i<=count($lut)-1;$i++){
    $lut[$i] -> apresentar();
  }

  ?> 
  </pre>
  
</body>
</html>