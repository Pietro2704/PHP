<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manipulação de string</title>
</head>
<body>

  <fieldset>
    <legend>Printf</legend>
    <?php
    //Manipulação de string:
    // printf = echo com formatações
    $prod = "computador";
    $preco = 10000;
    $estoque = 3;
    $divida = -5;
    printf("O %s esta custando R$%.2f",$prod,$preco);
    echo "<br>";
    printf("Temos em estoque apenas %d",$estoque);
    ?>
  </fieldset>

  <fieldset>
    <legend>Print_r</legend>
    <?php
      $x[0] = 4;
      $x[1] = 3;
      $x[2] = 2;
      var_export ($x);
      echo "<br>";
      var_dump ($x);
      echo "<br>";
      print_r ($x);
    ?>
  </fieldset>

  <fieldset>
    <legend>WordWrap</legend>
    <?php
      // codigo fonte da pagina
      //quebrar linhas de um texto por caracter
      $txt = "Esse é um exemplo de uma string gigantesca de imensa e eu poso ficar escrevendo aqui o quanto eu quiser pq ainda não sei o que essa função faz";
      $result = wordwrap($txt, 10, "<br>\n",true);
      // false = quebra por espaçamento
      // true = quebra pelo numero mesmooo
      echo $result;
    ?>
  </fieldset>

  <fieldset>
    <legend>StrLen</legend>
    <?php
      // Conta o espaço tbm!!
      $t = "Pietro Rosolia";
      $tamanho = strlen($t);
      echo $tamanho;
    ?>
  </fieldset>

  <fieldset>
    <legend>Trim</legend>
    <?php
      echo "<p>Tira os espaços das laterais</p>";
      $t = "    Pietro            Rosolia      ";
      $res = strlen($t);
      $r = trim($t);
      echo $r;
      echo "<br>";
      echo "Essa String tem $res caracteres";
    ?>
  </fieldset>

  <fieldset>
    <legend>Ltrim</legend>
    <?php
      echo "<p>Tira os espaços do lado esquerdo</p>";
      $t = "    Pietro            Rosolia      ";
      $res = strlen($t);
      $r = ltrim($t);
      echo $r;
      echo "<br>";
      echo "Essa String tem $res caracteres";
    ?>
  </fieldset>

  <fieldset>
    <legend>Rtrim</legend>
    <?php
      echo "<p>Tira os espaços do lado direito</p>";
      $t = "    Pietro            Rosolia      ";
      $res = strlen($t);
      $r = rtrim($t);
      echo $r;
      echo "<br>";
      echo "Essa String tem $res caracteres";
    ?>
  </fieldset>

  <fieldset>
    <legend>str_word_count</legend>
    <?php
      echo "<p>Conta quantas palavras uma string possui.</p>";
      $t = "    Pietro            Rosolia      ";
      $res = strlen($t);
      $r = str_word_count($t);
      echo $r;
      echo "<br>";
      echo "Essa String tem $res caracteres";
    ?>
  </fieldset>

  <fieldset>
    <legend>Explode</legend>
    <?php
      // Quebra uma string e coloca os itens em um vetor.
      echo "<p>Quebra uma string e coloca os itens em um vetor.</p>";
      $t = "Pietro Rosolia";
      $vetor = explode(" ",$t);
      var_dump($vetor);
    ?>
  </fieldset>

  <fieldset>
    <legend>Str_Split</legend>
    <?php
      //Coloca cada letra de uma string em uma posição de um vetor.
      echo "<p>Coloca cada letra de uma string em uma posição de um vetor.</p>";
      $nome = "Pietro";
      $vetor = str_split($nome);
      print_r($vetor);
    ?>
  </fieldset>

  <fieldset>
    <legend>Implode</legend>
    <?php
      echo "<p>Transforma um vetor inteiro em uma string.</p>";
      $vetor[0] = "Pietro";
      $vetor[1] = "Rosolia";
      $vetor[2] = "Santos";
      $texto = implode("#",$vetor); // join() = faz a mesma coisa, soh substituir implode por join
      print_r($texto);
    ?>
  </fieldset>

  <fieldset>
    <legend>CHR</legend>
    <?php
      echo "<p>Retorna um caractere de acordo com seu código ASCII passado como parâmetro.</p>";
      echo chr(98);
      // a = 65;
    ?>
  </fieldset>

  <fieldset>
    <legend>Ord</legend>
    <?php
      echo "<p>Retorna o código ASCII de um caractere passado como parâmetro.</p>";
      $algo = "b";
      echo ord($algo);
    ?>
  </fieldset>

  <fieldset>
    <legend>StrToLower</legend>
    <?php
      $text = "ESTOU ESCREVENDO EM MAIUSCULO";
      print_r(strtolower($text));
    ?>
  </fieldset>

  <fieldset>
    <legend>StrToUpper</legend>
    <?php
      $text = "estou escrevendo em minusculo";
      print_r(strtoupper($text));
    ?>
  </fieldset>

  <fieldset>
    <legend>UcFirst</legend>
    <?php
      $a = "pietro rosolia";
      print_r("Seu nome é: ".ucfirst($a));
    ?>
  </fieldset>

  <fieldset>
    <legend>UcWords</legend>
    <?php
      $a = "pietro rosolia";
      print_r("Seu nome é: ".ucwords($a));
    ?>
  </fieldset>

  <fieldset>
    <legend>StrRev</legend>
    <?php
      $a = "Pietro Rosolia";
      print_r("Seu nome ao contrario é: ".strrev($a));
    ?>
  </fieldset>

  <fieldset>
    <legend>StrPos</legend>
    <?php
      $a = "Pietro Rosolia";
      print_r("Seu sobrenome está na posição: ".strpos($a, "Rosolia"));
    ?>
  </fieldset>

  <fieldset>
    <legend>StrIPos</legend>
    <?php
      $a = "Pietro RoSoLiA";
      print_r("Seu sobrenome está na posição: ".stripos($a, "rosolia"));
    ?>
  </fieldset>

  <fieldset>
    <legend>SubStr_Count</legend>
    <?php
      $a = "Estou aprendendo PHP no Curso em vídeo de PHP";
      print_r("Nessa frase, a palavra foi usada: " .substr_count($a, "PHP"));
      echo " vezes";
    ?>
  </fieldset>

  <fieldset>
    <legend>SubStr</legend>
    <?php
      $a = "Curso em vídeo";
      print_r("Escolhendo o início e o fim da palavra que quero dessa variavel fica: " .substr($a,0,5));
    ?>
  </fieldset>

  <fieldset>
    <legend>Str_Pad</legend>
    <?php
      $a = "Guanabara";
      $b = str_pad($a,15,"0",STR_PAD_LEFT);
      print_r("O $b é uma lenda");
    ?>
  </fieldset>

  <fieldset>
    <legend>Str_repeat</legend>
    <?php
      $a = "Php";
      print_r(str_repeat($a,20));
    ?>
  </fieldset>

  <fieldset>
    <legend>Str_replace</legend>
    <?php
      $a = "Gosto de estudar Matematica";
      
      $b = str_replace("Matematica","PHP", $a);
      print_r($b);  
    ?>
  </fieldset>


</body>
</html>