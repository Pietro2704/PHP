<?php


class Caneta{
  // ATRIBUTOS
    // PUBLICO: A classe atual e todas as outras classes podem mexer nela
    // PRIVADO: Somente a classe atual pode mexer nele
    // PROTEGIDO: Classe atual e todas as suas sub-classes podem mexer
    
  public $modelo;
  public $cor;

  private $ponta;

  protected $carga;
  protected $tampada;




  public function rabiscar(){

    if ($this->tampada==true){
      echo "<p>ERRO! Não posso rabiscar</p>";
    }
    else{
      echo "<marquee>Estou rabiscando....</marquee>";
    }

  }
  
  private function tampar(){
    $this->tampada=true;

  }

  private function destampar(){
    $this->tampada = false;
  }


}







?>