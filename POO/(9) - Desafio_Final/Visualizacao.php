<?php 
require_once "Video.php";
require_once "Usuario.php";
class Visualizacao
{
  private $espectador;
  private $filme;

  public function __construct($espectador,$filme) {
    $this->espectador = $espectador;
    $this->filme = $filme;
    $this->filme->setViews($this->filme->getViews()+ 1);
    $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+ 1);
  }

  public function avalie()
  {
    this->filme->setAvaliacao(5);
  }
  public function darNota($nota)
  {
    this->filme->setAvaliacao($nota);
  }
  public function avaliarPorcentagem($porc)
  {
    $valor = $porc/10;
    $this->filme->setAvaliacao($valor);
  }

 
  public function getEspectador(){
    return $this->espectador;
  } 
  public function setEspectador($espectador){
    $this->espectador = $espectador;
    return $this;
  }

 
  public function getFilme(){
    return $this->filme;
  } 
  public function setFilme($filme){
    $this->filme = $filme;
    return $this;
  }
}
?>