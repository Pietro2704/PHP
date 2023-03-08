<?php 

  class Pessoa{
    //Atributos:

      private $nome;
      private $idade;
      private $sexo;

    //Métodos:
      //get e set:
      public function getNome(){
            return $this->nome;
      }
      public function setNome($nome){
            $this->nome = $nome;

            return $this;
      }


      public function getIdade(){
            return $this->idade;
      }
      public function setIdade($idade){
            $this->idade = $idade;

            return $this;
      }


      public function getSexo(){
            return $this->sexo;
      }
      public function setSexo($sexo){
            $this->sexo = $sexo;

            return $this;
      }

      // Construtor:

      public function __construct($no,$idad,$sex){
        $this -> setNome($no);
        $this -> setIdade($idad);
        $this -> setSexo($sex);
      }

      // Comportamento:

      public function apresentar(){
        echo "<br>Olá, meu nome é {$this->getNome()}, tenho {$this->getIdade()} anos e sou do sexo {$this->getSexo()}<br>";
        
      }

      public function fazerNiver(){
        $this->setIdade($this->getIdade()+1);
        echo "<br>Parabéns!!...<br>";
        echo "{$this->getNome()} acabou de fazer {$this->getIdade()} anos.<br>";
      }
  }


?>