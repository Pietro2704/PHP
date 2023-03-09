<?php 
require_once "Animal.php";
class Peixe extends Animal
{
  private $corEscama;



  public function locomover(){
    echo "Nadando";
  }
  public function alimentar(){
    echo "Comendo comida de peixe"
  }
  public function emitirSom(){
    echo "blup blup. . ."
  }
  public function soltarBolhas(){
    echo "Soltou " .rand(1,7)" bolha(s)"
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