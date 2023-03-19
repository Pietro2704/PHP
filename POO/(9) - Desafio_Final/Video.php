<?php 
require_once "AcoesVideo.php";
class Video implements AcoesVideo
{
  private $titulo;
  private $avaliacao;
  private $views;
  private $curtidas;
  private $reproduzindo;

  public function __construct($ti) {
    $this->titulo = $ti;
    $this->avaliacao = 1;
    $this->views = 0;
    $this->curtidas = 0;
    $this->reproduzindo = false;
  }


  

  public function getTitulo(){
    return $this->titulo;
  }
  public function setTitulo($titulo){
    $this->titulo = $titulo;
    return $this;
  }

 
  public function getAvaliacao(){
    return $this->avaliacao;
  }
  public function setAvaliacao($avaliacao){
    $this->avaliacao = $avaliacao;
    return $this;
  }

 
  public function getViews(){
    return $this->views;
  }
  public function setViews($views){
    $this->views = $views;
    return $this;
  }

 
  public function getCurtidas(){
    return $this->curtidas;
  }
  public function setCurtidas($curtidas){
    $this->curtidas = $curtidas;
    return $this;
  }

 
  public function getReproduzindo(){
    return $this->reproduzindo;
  }
  public function setReproduzindo($reproduzindo){
    $this->reproduzindo = $reproduzindo;
    return $this;
  }










  public function play(){
    if($this->getReproduzindo()){
      echo "Já está em reprodução...";
    }
    else{
      $this->setReproduzindo(true);
    }
  }
  public function pause(){
    if($this->getReproduzindo()==false){
      echo "Já está em pausa";
    }
    else{
      $this->setReproduzindo(false);
    }
  }
  public function like(){
      $this->setCurtidas($this->getCurtidas()+1);
  }
}
?>