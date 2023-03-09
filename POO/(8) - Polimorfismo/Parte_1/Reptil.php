<?php 
require_once "Animal.php";
class Reptil extends Animal
{
  private $corEscama

  public function locomover(){
    echo "Rastejando";
  }
  public function alimentar(){
    echo "Comendo alface"
  }
  public function emitirSom(){
    echo "....HHÉÉÉÉ....";
  }
 
  private function getCorEscama(){
    return $this->corEscama;
  }

  private function setCorEscama($corEscama){
    $this->corEscama = $corEscama;
    return $this;
  }
}
?>