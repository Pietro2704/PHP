<?php 
require_once "Pessoa";
class Professor extends Pessoa
{
  private $especialidade;
  private $salario;

  public function apresentar(){
    echo "<br>Olá, meu nome é {$this->getNome()}, sou especializado em {$this->getEspecialidade()} e recebo {$this->getSalario()} reais por mês<br>";
  }

  public function ReceberAumento($valor){
    $ajuste = ($this->getSalario() * $valor/100) + $this->getSalario();
    $this->setSalario($ajuste);
  }

  
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
}
?>