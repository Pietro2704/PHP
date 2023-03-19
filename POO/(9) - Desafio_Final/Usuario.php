<?php 
require_once "Pessoa.php";
class Usuario extends Pessoa
{
  private $login;
  private $totAssistido;

  public function __construct($nome,$idade,$sexo,$login) {
    parent::__construct($nome,$idade,$sexo);
    $this->login = $login;
  }

  public function viuMaisUm()
  {
    $this->setTotAssistido($this->getTotAssistido()+1);
  }

   public function getLogin(){
    return $this->login;
  }
  public function setLogin($login){
    $this->login = $login;
    return $this;
  }

  
  public function getTotAssistido(){
    return $this->totAssistido;
  } 
  public function setTotAssistido($totAssistido){
    $this->totAssistido = $totAssistido;
    return $this;
  }
}
?>