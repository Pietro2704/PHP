<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php
    function somas(...$x){
      $soma=0;
      foreach($x as $a){$soma+=$a;}
      return $soma;  
    }
    $x=somas(5,2,3,6,9);
    echo $x;
    echo "<br>";
  ?>



  <?php
    function soma(...$x){
      $soma=0;
      for($i=0;$i<count($x);$i++){
        $soma+=$x[$i];
      }
      return $soma;
    }

    $x=soma(5,2,9,3,5,7);
    echo $x;
  ?> 




  <?php
  /*

    ESSE CODIGO NN DEU CERTO, MAS A EXPLICAÇÃO DOS COMANDOS ESTÁ AI.....

  function somatoria(){
    $vet = func_get_arg(); // Variavel (vet) vai se tornar um vetor
    $tam = func_num_args(); // Conta quantos argumentos tem a função
    $s = 0; // Contador

    for($i=0; $i<$tam; $i++){ // i vai passar por todos os argumentos do vetor (vet)
      $s = $s + $vet[$i];// Soma os argumentos passados por i
    }
    return $s; // Fim da função retornando a somatoria dos argumentos
  }

  $r = somatoria(3,7,9,4,8); //Variavel r tem 5 argumentos e usa a função somatoria para somar todos os argumentos
  echo "A soma de todos os valores é $r"; // Echo a soma dos valores
  */
  ?>


  <?php
  /* RECEBE 4 VALORES DE UM FORM EM HTML E FAZ A SOMA COM FUNÇAO


    $n1 = isset($_POST["n1"])?$_POST["n1"]:1;
    $n2 = isset($_POST["n2"])?$_POST["n2"]:1;
    $n3 = isset($_POST["n3"])?$_POST["n3"]:1;
    $n4 = isset($_POST["n4"])?$_POST["n4"]:1;


    function soma(...$x){
      $soma = 0;
      for($i=0;$i<count($x);$i++){
        $soma+=$x[$i];
      }
      return $soma;
    }

    $result = soma($n1,$n2,$n3,$n4);
    echo $result;
  */
  ?>
  <fieldset>
    <legend>Soma de varios valores</legend>
  <?php
  // RECEBE INFINITOS VALORES E SOMA TODOS
    function soma(...$x){
      $soma = 0;
      for($i=0;$i<count($x);$i++){
        $soma+=$x[$i];
      }
      return $soma;
    }
    $r=soma(1,2,3,4,5,6,7,8,9);
    echo "A SOMA DE TODOS OS VALORES VALE: $r";
  ?>
  </fieldset>

<br><br>

<fieldset>
  <legend>Passagem por valor</legend>
<?php

  //FUNCAO SIMPLES>>>>

  function teste($x){
    $x+=3;
    echo $x;
  }
  
  $a = 2;
  teste($a);
  echo "<br>";
  echo $a;
?>
</fieldset>



<fieldset>
<legend>Passagem por referencia</legend>
<?php

 function add(&$x){
  $x+=3;
  echo $x;
 }
 $a = 2;
 add($a);
 echo "<br>";
 echo $a;

?>
</fieldset>


<fieldset>
  <legend>Função externa</legend>
  <?php
  
  // include
  // request
  //include once
  //request once
  // include por mais q nn exista o arquivo, o programa ainda tenta ler o resto, ja request como é requerido, se nn achar o arquivo, para tudo!!!

    include "funcao.php";
    ola();
    echo "<br>";
    som(1,3,5,7,9);
    echo "<br>";
    sub(1,2,3);
  ?>
</fieldset>

</body>
</html>