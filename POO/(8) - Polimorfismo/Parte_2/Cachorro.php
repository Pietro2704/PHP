<?php 
require_once "Lobo.php";
class Cachorro extends Lobo
{
  public function emitirSom(){
    echo "Au! Au! Au!<br>";
  }
  public function reagirFrase($frase){
    if(($frase=="Comida") || ($frase=="Ola")){
      echo "Abana o rabo e latir<br>";
    }
    else{
      echo "Rosnar<br>";
    }
  }
  public function reagirHora($hora,$min){
    if($hora<12){
      echo "Abana o rabo<br>";
    }
    else if($hora>=18){
      echo "Ignora<br>";
    }
    else{
      echo "Abana o rabo e latir<br>";
    }
  }
  public function reagirDono($dono){
    if($dono){
      echo "Abanar o rabo<br>";
    }
    else{
      echo "Rosnar e latir<br>";
    }
  }
  public function reagirIdadePeso($idade,$peso){
    if($idade<5){
      if($peso<10){
        echo "Abanar o rabo<br>";
      }
      else{
        echo "Latir<br>";
      }
    }
    else{
      if($peso){
        if($peso<10){
          echo "Rosnar<br>";
        }
        else{
          echo "Ignorar<br>";
        }
      }
    }
  }
}
?>