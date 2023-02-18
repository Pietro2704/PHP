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

    include "function.php";
    ola();
    echo "<br>";
    som(1,3,5,7,9);
    echo "<br>";
    sub(1,2,3);
  ?>
</fieldset>