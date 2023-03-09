<?php 
require_once "Aluno.php";
class Bolsista extends Aluno
{
  private $bolsa;

  public function apresentar(){
    echo "<br>Olá, meu nome é {$this->getNome()}, tenho bolsa de {$this->getBolsa()}% e estou fazendo o curso {$this->getCurso()} e meu número de matrícula é {$this->getMatricula()}<br>";
  }

  public function renovarBolsa(){
    echo "Bolsa renovada";
  }
  public function pagarMensalidade(){
    echo "<p><strong>{$this->getNome()}</strong> é bolsista, portanto paga menos!</p>";
  }


  public function getBolsa(){
    return $this->bolsa;
  }
  public function setBolsa($bolsa){
    $this->bolsa = $bolsa;
    return $this;
  }
}
?>