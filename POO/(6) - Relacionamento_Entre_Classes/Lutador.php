<?php



  class Lutador{

    //ATRIBUTOS:

    private $nome
    private $nacionalidade
    private $idade
    private $altura
    private $peso
    private $categoria
    private $vitorias
    private $derrotas
    private $empates


    //METODOS:

    //construtor

    public function __construct($nome,$nac,$idade,$altura,$peso,$vit,$der,$emp){
      setNome($nome);
      setNacionalidade($nac);
      setIdade($idade);
      setAltura($altura);
      setPeso($peso);
      setVitorias($vit);
      setDerrotas($der);
      setEmpates($emp);

    }



    //Get e Set

    private function getNome(){return $this -> nome;}
    private function setNome($a){$this -> nome = $a;}

    private function getNacionalidade(){return $this -> nacionalidade;}
    private function setNacionalidade($b){$this -> nacionalidade = $b;}
    
    private function getIdade(){return $this -> idade;}
    private function setIdade($c){$this -> idade = $c;}

    private function getAltura(){return $this -> altura;}
    private function setAltura($d){$this -> altura = $d;}

    private function getPeso(){return $this -> peso;}
    private function setPeso($e){$this -> peso = $e;}

    private function getCategoria(){return $this -> categoria;}
    private function setCategoria(){
      if(getPeso()<52.2){
        $this -> categoria = "Inválida"
      }
      elseif(getPeso()<=70.3){
        $this -> categoria = "Pena"
      }
      elseif(getPeso()<=83.9){
        $this -> categoria = "Médio"
      }
      elseif(getPeso()<=120.2){
        $this -> categoria = "Pesado"
      }
      else{
        $this -> categoria = "Inválida"
      }
    }

    private function getVitorias(){return $this -> vitorias;}
    private function setVitorias($g){$this -> vitorias = $g;}

    private function getDerrotas(){return $this -> derrotas;}
    private function setDerrotas($h){$this -> derrotas = $h;}

    private function getEmpates(){return $this -> empates;}
    private function setEmpates($i){$this -> empates = $i;}




    // abstrato

    public function apresentar(){
      echo "Lutador: " .getNome();
      echo "Origem: " .getNacionalidade();
      echo getIdade() ." anos";
      echo getAltura() ." m de altura";
      echo "Pesando" .getPeso() ." Kg";
      echo "Vitorias: " .getVitorias();
      echo "Derrotas: " .getDerrotas();
      echo "Empates: " .getEmpates();


    }
    public function status(){
      echo getNome();
      echo "É categoria do tipo " .getCategoria();
      echo "Tem " .getVitorias() ." vitórias, " .getDerrotas() ." derrotas e " .getEmpates() ." empates";
    }
    public function ganharLuta(){setVitorias()+1;}
    public function perderLuta(){setDerrotas()+1;}
    public function empatarLuta(){setEmpates()+1;}



  }
?>