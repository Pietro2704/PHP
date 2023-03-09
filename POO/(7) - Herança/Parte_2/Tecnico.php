<?php 
require_once "Aluno.php";
class Tecnico extends Aluno
{
  private $registroProfissional;

  public function pagarMensalidade(){
    echo "<p><strong>{$this->getNome()}</strong> faz técnico, portanto a mensalidade é mais cara</p>";
  }

  public function apresentar(){
    echo "<br>Olá, meu nome é {$this->getNome()}, tenho {$this->getIdade()} anos, meu registro profissional é {$this->getRegistroProfissional()}, estou cursando {$this->getCurso()} e meu número de matrícula é {$this->getMatricula()}<br>";
  }

  public function praticar(){
    echo "Praticando";
  }


  public function getRegistroProfissional(){
    return $this->registroProfissional;
  }
  public function setRegistroProfissional($registroProfissional){
    $this->registroProfissional = $registroProfissional;
    return $this;
  }
}
?>