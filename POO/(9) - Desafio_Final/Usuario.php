<?php 
require_once "Pessoa.php";
class Usuario extends Pessoa
{
  private $login;
  private $totAssistido;

  public function viuMaisUm()
  {
    
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