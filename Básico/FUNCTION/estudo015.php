<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entendendo função</title>
</head>
<body>

  <?php
  function Somar($a, $b){
    $s = $a + $b;
    echo "<p>A soma de $a + $b = $s</p>";
  }

  Somar(3,4);
  Somar(8,2);

  $x = 10;
  $y = 20;
  Somar($x, $y);
  ?>



  <?php
    function Add($a, $b){
      $s = $a + $b;
      return $s;
    }
    $res = Add(22,34);
    echo $res;
    echo "<br>";
  ?>



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



</body>
</html>