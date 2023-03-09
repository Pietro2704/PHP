<?php 
  abstract class Animal
  {
    private $peso;
    private $idade;
    private $membros;

    public function locomover(){
      
    }
    public function alimentar(){

    }
    public function emitirSom(){
      
    }


    protected function getPeso(){
        return $this->peso;
    }
    protected function setPeso($peso){
        $this->peso = $peso;
        return $this;
    }


    protected function getIdade(){
        return $this->idade;
    }
    protected function setIdade($idade){
        $this->idade = $idade;
        return $this;
    }


    public function getMembros(){
        return $this->membros;
    }
    public function setMembros($membros){
        $this->membros = $membros;
        return $this;
    }
  }
?>