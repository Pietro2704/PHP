<?php


class Caneta{

  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;

  function rabiscar(){

    if ($this->tampada==true){
      echo "<p>ERRO! Não posso rabiscar</p>";
    }
    else{
      echo "<marquee>Estou rabiscando....</marquee>";
    }

  }
  
  function tampar(){
    $this->tampada=true;

  }

  function destampar(){
    $this->tampada = false;
  }


}







?>