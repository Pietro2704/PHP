<?php
  function som(...$x){
    $soma = 0;
    for($i=0;$i<count($x);$i++){
      $soma+=$x[$i];
      
    }
    echo $soma;
  }

  function sub(...$x){
    $sub = 0;
    for($i=0;$i<count($x);$i++){
      $sub-=$x[$i];
    }
    echo $sub;
  }

  function ola(){
    echo "Olá, Meu nome é Pietro!";
  }
?>


