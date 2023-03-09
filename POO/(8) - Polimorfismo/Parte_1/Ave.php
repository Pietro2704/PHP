<?php 
require_once "Animal.php";
class Ave extends Animal
{
  private $corPena;

  public function fazerNinho(){
    
  }
  public function locomover(){
      
  }
  public function alimentar(){

  }
  public function emitirSom(){
    
  }

 
  private function getCorPena(){
    return $this->corPena;
  }
  private function setCorPena($corPena){
    $this->corPena = $corPena;
    return $this;
  }
}

?>