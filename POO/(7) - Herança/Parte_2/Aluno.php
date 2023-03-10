<?php 
require_once "Pessoa.php";
class Aluno extends Pessoa
{
  private $matricula;
  private $curso;

  public function apresentar(){
    echo "<br>Olá, meu nome é {$this->getNome()}, tenho {$this->getIdade()} anos, estou fazendo o curso {$this->getCurso()} e meu número de matrícula é {$this->getMatricula()}<br>";
  }

  public function cancelarMatricula(){
    $this->setMatricula(NULL);
  }
  public function pagarMensalidade(){
    echo "<p>Pagando mensalidade do aluno <strong>{$this->getNome()}</strong></p>";
  }



  public function getMatricula(){
    return $this->matricula;
  }
  public function setMatricula($matricula){
    $this->matricula = $matricula;
    return $this;
  }

  public function getCurso(){
    return $this->curso;
  }
  public function setCurso($curso){
    $this->curso = $curso;
    return $this;
  }
}
?>