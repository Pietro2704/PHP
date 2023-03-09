<?php 
require_once "Animal.php";
class Ave extends Animal
{
  private $corPena;

  public function fazerNinho(){
    
  }

 
  private function getCorPena()
  {
    return $this->corPena;
  }
  private function setCorPena($corPena)
  {
    $this->corPena = $corPena;

    return $this;
  }
}

?>