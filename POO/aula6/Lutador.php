<?php

  // usar interface, primeiro requere depois implementa

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

    public function __construct(){}



    //Get e Set

    private function getNome(){}
    private function setNome(){}

    private function getNacionalidade(){}
    private function setNacionalidade(){}
    
    private function getIdade(){}
    private function setIdade(){}

    private function getAltura(){}
    private function setAltura(){}

    private function getPeso(){}
    private function setPeso(){}

    private function getCategoria(){}
    private function setCategoria(){}

    private function getVitorias(){}
    private function setVitorias(){}

    private function getDerrotas(){}
    private function setDerrotas(){}

    private function getEmpates(){}
    private function setEmpates(){}




    //comportamento

    public function apresentar(){}
    public function status(){}
    public function ganharLuta(){}
    public function perderLuta(){}
    public function empatarLuta(){}



  }
?>