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

    public function getNome(){return $this -> nome;}
    public function setNome($a){$this -> nome = $a;}

    public function getNacionalidade(){return $this -> nacionalidade;}
    public function setNacionalidade($b){$this -> nacionalidade = $b;}
    
    public function getIdade(){return $this -> idade;}
    public function setIdade($c){$this -> idade = $c;}

    public function getAltura(){return $this -> altura;}
    public function setAltura($d){$this -> altura = $d;}

    public function getPeso(){return $this -> peso;}
    public function setPeso($e){
      $this -> peso = $e;
      $this -> setCategoria();
    }

    public function getCategoria(){return $this -> categoria;}
    public function setCategoria(){
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

    public function getVitorias(){return $this -> vitorias;}
    public function setVitorias($g){$this -> vitorias = $g;}

    public function getDerrotas(){return $this -> derrotas;}
    public function setDerrotas($h){$this -> derrotas = $h;}

    public function getEmpates(){return $this -> empates;}
    public function setEmpates($i){$this -> empates = $i;}



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
      echo "<p>-------------------UFC--------------------</p>";
      echo "Lutador: " .$this -> getNome() ."<br>";
      echo "Origem: " .$this -> getNacionalidade() ."<br>";
      echo $this -> getIdade() ." anos" ."<br>";
      echo $this -> getAltura() ." m de altura" ."<br>";
      echo "Pesando " .$this -> getPeso() ." Kg" ."<br>";
      echo "Vitorias: " .$this -> getVitorias() ."<br>";
      echo "Derrotas: " .$this -> getDerrotas() ."<br>";
      echo "Empates: " .$this -> getEmpates() ."<br>";
      echo "<p>------------------- // --------------------</p><br>";


    }
    public function status(){
      echo "----------------------------------------------------------------------------<br>";
      echo $this -> getNome() ."<br>";
      echo "É categoria do tipo " .$this -> getCategoria() ."<br>";
      echo "Tem " .$this -> getVitorias() ." vitórias, " .$this -> getDerrotas() ." derrotas e " .$this -> getEmpates() ." empates" ."<br>";
      echo "----------------------------------------------------------------------------<br>";
    }

    public function ganharLuta(){$this -> setVitorias($this->getVitorias()+1);}

    public function perderLuta(){$this -> setDerrotas($this->getDerrotas()+1);}

    public function empatarLuta(){$this -> setEmpates($this->getEmpates()+1);}

  }
?>