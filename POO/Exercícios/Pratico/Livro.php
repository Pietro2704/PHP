<?php

  require_once "Pessoa.php";
  require_once "Publicacao.php";

  class Livro implements Publicacao
  {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;

        return $this;
    }


    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;

        return $this;
    }


    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;

        return $this;
    }


    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;

        return $this;
    }


    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($aberto){
        $this->aberto = $aberto;

        return $this;
    }


    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;

        return $this;
    }



    public function __construct($t,$au,$tp){
      $this->setTitulo($t);
      $this->setAutor($au);
      $this->setTotPaginas($tp);
      $this->setLeitor(NULL);
      $this->setAberto(false);
      $this->setPagAtual(0);
    }



    public function detalhe(){
      if($this->getLeitor() != NULL){
        echo "<br>-------------------------------------------------------------------------------<br>";
        echo "Nome: {$this->getTitulo()}<br>";
        echo "Páginas: {$this->getTotPaginas()}<br>";
        echo "Página Atual: {$this->getPagAtual()}<br>";
        echo "Escrito por: {$this->getAutor()}<br>";
        echo "Leitor: {$this->getLeitor()->getNome()}";
        echo "<br>-------------------------------------------------------------------------------<br>";
      }
      else{
        echo "<br>-------------------------------------------------------------------------------<br>";
        echo "Nome: {$this->getTitulo()}<br>";
        echo "Páginas: {$this->getTotPaginas()}<br>";
        echo "Página Atual: {$this->getPagAtual()}<br>";
        echo "Escrito por: {$this->getAutor()}<br>";
        echo "Leitor: Vazio";
        echo "<br>-------------------------------------------------------------------------------<br>";
      }
    }

    public function leitor($l){
      $this->setLeitor($l);
    }
    
    public function abrir(){
      $this->setPagAtual(1);
      $this->setAberto(true);
    }
    public function fechar(){
      $this->setPagAtual(0);
      $this->setAberto(false);
    }
    public function folhear($p){
      if($p>$this->getTotPaginas()){
        echo "<br>Está pagina não foi encontrada, este livro só tem {$this->getTotPaginas()} páginas<br>";
      }
      if($p<0){
        echo "<br>Está pagina não foi encontrada, este livro só tem {$this->getTotPaginas()} páginas<br>";
      }
      else{
        $this->setPagAtual($p);
      }
    }
    public function avancarPag(){
      if(($this->getPagAtual()) < ($this->getTotPaginas())){
        $this->setPagAtual($this->getPagAtual()+1);
      }
      else{
        echo "<br>Este livro só tem {$this->getTotPaginas()} páginas<br>";
      }
    }
    public function voltarPag(){
      if($this->getPagAtual() > 0){
        $this->setPagAtual($this->getPagAtual()+1);
      }
      else{
        echo "<br>Este livro só tem {$this->getTotPaginas()} páginas<br>";
      }
    }
  }
?>