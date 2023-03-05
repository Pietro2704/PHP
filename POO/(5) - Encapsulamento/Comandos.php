<?php
  interface Comandos{
    public function Ligar();
    public function Desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function Aumentar($c);
    public function Diminuir($c);
    public function Mudo();
    public function Desmute();
    public function Tocar();
    public function Pausar();
  }
?>