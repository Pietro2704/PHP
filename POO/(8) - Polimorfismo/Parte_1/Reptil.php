<?php 
require_once "Animal.php";
class Reptil extends Animal
{
  private $corEscama;

  public function locomover(){
    echo "Rastejando<br>";
  }
  public function alimentar(){
    echo "Comida de reptil<br>";
  }
  public function emitirSom(){
    echo "Som de reptil<br>";
  }
 
  public function getCorEscama(){
    return $this->corEscama;
  }

  public function setCorEscama($corEscama){
    $this->corEscama = $corEscama;
    return $this;
  }
}
?>