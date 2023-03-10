<?php 
require_once "Animal.php";
class Peixe extends Animal
{
  private $corEscama;



  public function locomover(){
    echo "Nadando<br>";
  }
  public function alimentar(){
    echo "Comendo comida de peixe<br>";
  }
  public function emitirSom(){
    echo "blup blup. . .<br>";
  }
  public function soltarBolhas(){
    echo "Soltou " .rand(1,7) ." bolha(s)<br>";
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