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



    public function __construct($t,$au,$tp,$l){
      $this->setTitulo($t);
      $this->setAutor($au);
      $this->setTotPaginas($tp);
      $this->setAberto(false);
      $this->setLeitor($l);
    }



    public function detalhe(){
      echo "<br>Este livro se chama ".$this->getTitulo() .", tem ".$this->getTotPaginas() ." páginas e foi escrito por " .$this->getAutor();
    }
    
    public function abrir(){
      $this->setAberto(true);
    }
    public function fechar(){
      $this->setAberto(false);
    }
    public function folhear($p){
      if($p>$this->getTotPaginas()){
        echo "<br>Este livro só tem {$this->getTotPaginas()} páginas<br>";
      }
      else{
        $this->setPagAtual($p);
      }
    }
    public function avancarPag(){
      $this->setPagAtual($this->getPagAtual()+1);
    }
    public function voltarPag(){
      $this->setPagAtual($this->getPagAtual()-1);
    }
  }
?>