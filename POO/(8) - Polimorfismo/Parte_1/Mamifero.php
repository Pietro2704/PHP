<?php 
require_once "Animal.php";
class Mamifero extends Animal
{
  private $corPelo;

  public function locomover(){
    echo "Correndo";
  }
  public function alimentar(){
    echo "Mamando";
  }
  public function emitirSom(){
    echo "Au! Au!...";
  }


  private function getCorPelo(){
    return $this->corPelo;
  }

  private function setCorPelo($corPelo){
    $this->corPelo = $corPelo;
    return $this;
  }
}
?>