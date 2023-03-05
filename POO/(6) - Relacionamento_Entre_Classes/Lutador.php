<?php



  class Lutador{

    //ATRIBUTOS:

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    //METODOS:

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
    private function setPeso($e){
      $this -> peso = $e;
      $this -> setCategoria();
    }

    private function getCategoria(){return $this -> categoria;}
    private function setCategoria(){
      if($this -> getPeso() < 52.2){
        $this -> categoria = "Inválida";
      }
      elseif($this -> getPeso() <= 70.3){
        $this -> categoria = "Pena";
      }
      elseif($this -> getPeso() <= 83.9){
        $this -> categoria = "Médio";
      }
      elseif($this -> getPeso() <= 120.2){
        $this -> categoria = "Pesado";
      }
      else{
        $this -> categoria = "Inválida";
      }
    }

    private function getVitorias(){return $this -> vitorias;}
    private function setVitorias($g){$this -> vitorias = $g;}

    private function getDerrotas(){return $this -> derrotas;}
    private function setDerrotas($h){$this -> derrotas = $h;}

    private function getEmpates(){return $this -> empates;}
    private function setEmpates($i){$this -> empates = $i;}



    //construtor

    public function __construct($nome,$nac,$idade,$altura,$peso,$vit,$der,$emp){
      $this -> setNome($nome);
      $this -> setNacionalidade($nac);
      $this -> setIdade($idade);
      $this -> setAltura($altura);
      $this -> setPeso($peso);
      $this -> setVitorias($vit);
      $this -> setDerrotas($der);
      $this -> setEmpates($emp);

    }


    // abstrato

    public function apresentar(){
      echo "Lutador: " .$this -> getNome() ."<br>";
      echo "Origem: " .$this -> getNacionalidade() ."<br>";
      echo $this -> getIdade() ." anos" ."<br>";
      echo $this -> getAltura() ." m de altura" ."<br>";
      echo "Pesando" .$this -> getPeso() ." Kg" ."<br>";
      echo "Vitorias: " .$this -> getVitorias() ."<br>";
      echo "Derrotas: " .$this -> getDerrotas() ."<br>";
      echo "Empates: " .$this -> getEmpates() ."<br>";


    }
    public function status(){
      echo $this -> getNome() ."<br>";
      echo "É categoria do tipo " .$this -> getCategoria() ."<br>";
      echo "Tem " .$this -> getVitorias() ." vitórias, " .$this -> getDerrotas() ." derrotas e " .$this -> getEmpates() ." empates" ."<br>";
    }

    public function ganharLuta(){$this -> setVitorias()+1;}

    public function perderLuta(){$this -> setDerrotas()+1;}

    public function empatarLuta(){$this -> setEmpates()+1;}



  }
?>