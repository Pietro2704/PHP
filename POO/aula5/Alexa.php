<?php
  require_once 'Comandos.php';
  class Alexa implements Comandos{

    private $volume;
    private $ligado;
    private $tocando;

    private function getVolume(){
      return $this -> volume;
    }
    private function setVolume($a){
      $this -> volume = $a;
    }
    private function getLigado(){
      return $this -> ligado;
    }
    private function setLigado($b){
      $this -> ligado = $b;
    }
    private function getTocando(){
      return $this -> tocando;
    }
    private function setTocando($c){
      $this -> tocando = $c;
    }
    


    
    public function __construct(){
      $this -> setVolume(50);
      $this -> setLigado(false);
      $this -> setTocando(false);
    }
    
    
    
    public function Ligar(){
      $this->setLigado(true);
    }
    public function Desligar(){
      $this->setLigado(false);
    }
    public function abrirMenu(){
      if($this->getLigado()){
        echo "<p>-----  MENU  -----</p>";
        echo ($this->getLigado()) ? "Estou Ligado<br>":"Não estou ligado<br>";
        echo ($this->getTocando())?"Estou tocando<br>":"Não estou tocando<br>";


        echo "Meu volume está em ".$this->getVolume();
        echo "<br>";
        echo "Volume: ";
        for($i=10;$i<=$this->getVolume();$i+=10){
          echo " |";
        }
        echo "<p>-----  ******  -----</p>";
      }else{echo "Estou desligado!";}
    }
    public function fecharMenu(){
      echo "Fechando Menu...";
    }
    public function Aumentar($c){
      if(($this -> getLigado()) and ($this->getVolume()>=0)){
        $this->setVolume($this->getVolume()+$c);
      }else{echo "ERRO";}
    }
    public function Diminuir($c){
      if(($this->getLigado()) and ($this->getVolume()>0)){
        $this->setVolume($this->getVolume()-$c);
      }else{echo "ERRO";}
    }
    public function Mudo(){
      if(($this -> getLigado()) && ($this ->getVolume()>0)){
        $this -> setVolume(0);
      }else{echo "ERRO";}
    }
    public function Desmute(){
      if(($this->getLigado()) && ($this->getVolume()==0)){
        $this->setVolume(50);
      }
    }
    public function Tocar(){
      if(($this->getLigado()) and !($this->getTocando())){
        $this-> setTocando(true);
      }
    }
    public function Pausar(){
      if(($this->getLigado()) and ($this->getTocando())){
        $this-> setTocando(false);
      }
    }


  }
  ?>