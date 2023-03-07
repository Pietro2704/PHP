<?php 
  require_once "Lutador.php";
  class Luta
  {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function __contruct(){
      $this-> setDesafiante(NULL);
      $this-> setDesafiado(NULL);
      $this-> setAprovada(false);
      $this-> rounds = 0;
    }
    

    private function getDesafiado(){
        return $this->desafiado;
    }
    private function setDesafiado($lutador){
        $this->desafiado = $lutador;
        return $this;
    }

    private function getDesafiante(){
        return $this->desafiante;
    }
    private function setDesafiante($lutador){
        $this->desafiante = $lutador;

        return $this;
    }

    private function getRounds(){
        return $this->rounds;
    }
    private function setRounds($round){
        $this->rounds = $round;
        return $this;
    }

    private function getAprovada(){
        return $this->aprovada;
    }
    private function setAprovada($ss){
        $this->aprovada = $ss;
        return $this;
    }



    public function marcarLuta($l1,$l2){
      if($l1 != $l2){
        if(($l1->getCategoria()) == ($l2->getCategoria())){
          echo "Aprovada";
          $this->setAprovada(true);
          $this->setDesafiado($l1);
          $this->setDesafiante($l2);
        }
      }
      else{
        echo "Não está aprovada";
        $this->setAprovada(false);
        $this->setDesafiado(NULL);
        $this->setDesafiante(NULL);
      }
    }
    public function lutar(){
      if($this->getAprovada()){
        $this->getDesafiado()->apresentar();
        $this->getDesafiante()->apresentar();

        $vencedor = rand(0,2);
        switch($vencedor){
          case "0":
            echo "Empatou!";
            $this->getDesafiado()->empatarLuta();
            $this->getDesafiante()->empatarLuta();
            break;
          case "1":
            echo "{$this->getDesafiante()->getNome()} GANHOUU!!";
            $this->getDesafiado()->perderLuta();
            $this->getDesafiante()->ganharLuta();
            break;
          case "2":
            echo "{$this->getDesafiado()->getNome()} GANHOUU!!";
            $this->getDesafiado()->ganharLuta();
            $this->getDesafiante()->perderLuta();
            break;
        }
      }
      else{
        echo "Luta não pode acontecer!";
      }
    }
  }
  

?>