<?php


class Caneta{

  private $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  public $tampada;

  /*
  public function __construct(){ //Metodo construtor
    $this -> carga = 100;
    $this -> cor = 'Azul';
    $this -> modelo = 'BIC';
    $this -> ponta = 0.5;
    $this -> tampada = true;
  }
  */
  public function __construct($m,$c,$p){
    $this -> setModelo($m);
    $this -> setCor($c);
    $this -> setPonta($p);
    $this -> carga = 100;
    $this -> tampar();
  }

  public function getModelo(){
    return $this -> modelo;
  }
  public function getPonta(){
    return $this -> ponta;
  }
  public function getCor(){
    return $this -> cor;
  }
  public function setModelo($m){
    $this -> modelo = $m;
  }
  public function setPonta($p){
    $this -> ponta = $p;
  }
  public function setCor($c){
    $this -> cor = $c;
  }
  public function tampar(){
    $this->tampada=true;
  }
  public function destampar(){
    $this->tampada=false;
  }



}







?>