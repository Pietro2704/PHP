<?php 
require_once "Animal.php";
class Ave extends Animal
{
  private $corPena;

  public function fazerNinho(){
    echo "Montando o ninho...<br>";
  }
  public function locomover(){
    echo "locomovendo igual ave<br>";
  }
  public function alimentar(){
    echo "Comendo igual ave<br>";
  }
  public function emitirSom(){
    echo "Som de ave<br>";
  }

 
  public function getCorPena(){
    return $this->corPena;
  }
  public function setCorPena($corPena){
    $this->corPena = $corPena;
    return $this;
  }
}

?>