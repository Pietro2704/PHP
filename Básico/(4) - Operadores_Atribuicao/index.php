<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Operadores de Atribuição</title>
</head>
<body>
<h1>Operadores de Atribuição</h1>
  <?php
  $a = 1;
  $b = 3;
  $c = $a + $b;
  echo "A = $a e B= $b";
  echo "<br><br>O valor de C que é A + B é $c";
  $c = $c + 5;
  echo "<br><br>C recebe ele mesmo + 5";
  echo "<br><br>Agora o C vale $c";
  $c += 5;
  echo "<br><br>C recebe ele + 5 de outra forma";
  echo "<br><br>Agora o C vale $c";
  $b = $b + $a;
  echo "<br><br>Agora B recebe ele mesmo + A, ficando $b";
  $b += $a;
  echo "<br><br>B recebe ele mesmo + A de outra forma, <br><br>Agora B vale $b";
  $a += $a;
  echo "<br><br> Agora A recebe ele mesmo + A, ficando $a";

  echo "<hr>";

  echo "<h2>Exercício: </h2>";
  echo "<h4>Coloque ainda na URL um valor para p ('/?p=num')</h4>";
  $preco = $_GET["p"];
  echo "O preço do produto é R$ " .number_format($preco,2);
  $desc = 10/100 * $preco;
  $preco -= $desc;
  echo "<br><br>Com 10% de desconto, o preço fica R$ ".number_format($preco,2);
  ?>

  <hr>

  <?php
  echo "<h2>Operadores de Incremento</h2>";
  $a = 1;
  echo ++$a;
  echo "<br>";
  echo $a++;

  // Tem Importancia a ordem que coloca os sinais (CUIDADO)!!

  $atual = 2022;
  echo "<br><br>O ano atual é $atual";
  echo "<br><br> E o ano anterior foi " . --$atual;
  $atual = 2022; 
  echo "<br><br> E o ano que vem vai ser  ". ++$atual;
  ?>

  <hr>

  <?php
  echo "<h2>Variáveis referenciadas</h2>";
  $a = 3;
  $b = $a;
  $b+=5;
  echo "<h4>A=3<br>B=A<br>B recebe ele mesmo + 5</h4>";
  echo "O valor de A agora é $a<br><br>";
  echo "O valor de B agora é $b";
  $a = 3;
  $b = &$a;
  $b+=5;
  echo "<h4>Agora A = 3<br>E o B = &A -- (B referente a A)<br>B recebe ele mesmo + 5</h4>";
  echo "O valor de A é $a<br><br>";
  echo "O valor de B é $b";
  ?>

  <hr>

  <?php
  echo "<h2>Variáveis de Variáveis</h2>";
  $site = "cursoemvideo";
  $$site = "Curso de PHP";
  $armario = "Gaveta";
  $$armario = "Meia";
  echo "A primeira variável é $site e a variável dentro dela é $cursoemvideo<br><br>";
  echo "Dentro da variável Armario tem uma $armario e dentro de $armario tem uma $Gaveta";
  ?>

  <hr>


</body>
</html>