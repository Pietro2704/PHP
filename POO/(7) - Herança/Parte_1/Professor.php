<?php 
require_once "Pessoa.php";
class Professor extends Pessoa
{
  private $especialidade;
  private $salario;

  public function getEspecialidade(){
    return $this->especialidade;
  }
  public function setEspecialidade($especialidade){
    $this->especialidade = $especialidade;
    return $this;
  }

  public function getSalario(){
    return $this->salario;
  }
  public function setSalario($salario){
    $this->salario = $salario;
    return $this;
  }
  /*
  public function __construct(){

  }
  */
  public function ReceberAumento($valor){
    $ajuste = ($this->getSalario() * $valor/100) + $this->getSalario();
    $this->setSalario($ajuste);
  }
}
?>