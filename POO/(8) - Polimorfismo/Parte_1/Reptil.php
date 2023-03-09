<?php 
require_once "Animal.php";
class Reptil extends Animal
{
  private $corEscama
 
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