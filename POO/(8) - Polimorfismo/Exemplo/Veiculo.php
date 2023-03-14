<?php 
abstract class Veiculo
{
  private $altura;
  private $largura;
  private $cor;
  private $marca;
  private $modelo;
  private $qntRodas;
  private $qntPortas;
  private $velocidade;
  private $motor;

  public function ligar(){
    if($this->getMotor()){
      echo "O carro ja está ligado";
    }
    else{
      echo "VRUUMM...";
    }
  }
  public function acelerar($v){
    $this->setVelocidade($this -> getVelocidade()+$v);
  }
  public function desacelerar($v){
    if($this->getVelocidade()>0){
      $this->setVelocidade($this -> getVelocidade()-$v);
    }
    else{
      echo "ERRO: velocidade menor ou igual a 0";
    }
  }
  public function parar(){
    $this->setVelocidade(0);
  }
  public function buzinar(){
    echo "<p>BIIIIIIIII</p>";
  }

}
?>