<?php 
require_once "Animal.php";
class Mamifero extends Animal
{
  private $corPelo;


  private function getCorPelo()
  {
    return $this->corPelo;
  }

  private function setCorPelo($corPelo)
  {
    $this->corPelo = $corPelo;

    return $this;
  }
}
?>