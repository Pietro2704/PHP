<?php

  class ContaBanco{

    private $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //$this -> numConta = 0;
    
    /*
    public function __construct(){
      $this -> setNumConta($this -> getNumConta()+1);
      $this -> tipo = NULL;
      $this -> dono = NULL;
      $this -> saldo = NULL;
      $this -> status = NULL;
        
    }
    */


    public function __construct(){
      $this -> saldo = 0;
      $this -> status = false;
    }

    public function abrirConta($n,$tc){
      $this -> setTipo($tc);
      $this -> setStatus(true);

      //$this -> setNumConta($this -> getNumConta() + 1);
      $this -> dono = $n;

      if($tc == 'CC'){
        $this -> saldo = 50;

      }else if($tc == 'CP'){
        $this -> saldo = 150;

      }else{print("<p>Existe apenas Conta Corrente ou Conta Poupança<p>");}
      
    }

    public function fecharConta(){

      if($this->status==true){

        if($this->saldo > 0){
          echo "<p>Ainda tem dinheiro na conta!</p>";

        }else if($this->saldo < 0){
          echo "<p>Você possui dívidas!</p>";

        }else{
          $this -> setStatus(false);
          echo "<p>Conta Encerrada com Sucesso!</p>";
        }

      }else{echo "<p>Você não pussui conta neste banco</p>";}

    }

    public function depositar($din){
      if($this->getStatus() == true){
        $this -> setSaldo($this -> getSaldo() + $din);
      }else{
        echo "<p>Sua conta está fechada no momento</p>";
      }
    }
    public function sacar($din){
      if($this->getStatus()==true){
        if($din > $this -> getSaldo()){
          echo "<p>Saldo Insuficiente!</p>";
        }else{$this -> setSaldo($this -> getSaldo() - $din);}
      }
    }
    public function pagarMensal(){
      if($this -> getStatus() == true){

        if($this->getTipo()=='CC'){
          $v = 12;

          if($this -> getSaldo()>=$v){
            $this -> setSaldo($this->getSaldo() - $v);
          }else{
            echo "<p>Saldo Insuficiente para pagar esse mês</p>";
          }

        }else{
          $v = 20;
          if($this -> getSaldo()>=$v){
            $this -> setSaldo($this->getSaldo() - $v);
          }else{
            echo "<p>Saldo Insuficiente para pagar esse mês</p>";
          }
        }
      }else{
        echo "<p>Sua conta está desativada</p>";
      }
    }





    public function getNumConta(){
      return $this-> numConta;
    }
    public function setNumConta($a){
      $this -> numConta = $a;
    }
    public function getTipo(){
      return $this-> tipo;
    }
    public function setTipo($b){
      $this -> tipo = $b;
    }
    public function getDono(){
      return $this-> dono;
    }
    public function setDono($c){
      $this -> dono = $c;
    }
    public function getSaldo(){
      return $this-> saldo;
    }
    public function setSaldo($d){
      $this -> saldo = $d;
    }
    public function getStatus(){
      return $this-> status;
    }
    public function setStatus($e){
      $this -> status = $e;
    }




  }
?>