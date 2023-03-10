<?php 
require_once "Animal.php";
class Ave extends Animal
{
  private $corPena;

  public function fazerNinho(){
    echo "Montando o ninho...<br>";
  }
  public function locomover(){
    echo "Voando<br>";
  }
  public function alimentar(){
    echo "Comendo peixe<br>";
  }
  public function emitirSom(){
    echo "Piu Piu Piu<br>";
  }

 
  public function getCorPena(){
    return $this->corPena;
  }
  public function setCorPena($corPena){
    $this->corPena = $corPena;
    return $this;
  }
}

?>