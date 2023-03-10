<?php 
require_once "Reptil.php";
class Tartaruga extends Reptil
{
  public function locomover(){
    echo "Andando beeem devagar<br>";
  }
  public function alimentar(){
    echo "Comendo Vegetais<br>";
  }
  public function emitirSom(){
    echo "HÉÉÉÉ....<br>";
  }
}
?>