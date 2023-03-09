<?php 
require_once "Animal.php";
class Peixe extends Animal
{
  private $corEscama;

  public function soltarBolhas(){
    echo "blup blup. . ."
  }

  private function getCorEscama()
  {
    return $this->corEscama;
  }
  private function setCorEscama($corEscama)
  {
    $this->corEscama = $corEscama;

    return $this;
  }
}
?>