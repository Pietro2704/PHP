<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- 
    Árvore de Herança:

            ______A_______
           |      |       | 
         __AA   __AB__    AC__
        |      |      |       |
        AAA   ABA   ABB     ACA
               | 
          ABAA - ABAB

      Raíz: A
      Progenitora: São as filhas
      Ancestral: A é ancestral de AAA
      Descendente: ACA é descendente de A
      Folhas: Não tem Filhos



    Tipos de Herança:
      - Herança de Implementação (mais probre)
      - Herança para Diferença



    Abstrato e Final:

    Classe Abstrata:
      Não pode ser instanciada. Só serve como progenitora
    Método Abstrato:
      Declarado, mas não implementado na progenitora.
    
    Classe Final:
      Não pode ser herdada por outra classe. Obrigatoriamente folha
    Método Final:
      Não pode ser sobrescrito pelas suas sub-classes. Obrigatoriamente herdado

   -->
</head>
<body>
  <pre>
    <?php
      require_once "Visitante.php";
      require_once "Aluno.php";
      require_once "Bolsista.php";

      // Classe Pessoa é abstrata...

      $v = new Visitante();
      // Visitante herdou atributos de Pessoa
      $v -> setNome("Pietro");
      $v -> setIdade(20);
      $v -> setSexo("M");
      print_r($v);
      // Visitante herdou Métodos de Pessoa
      $v -> fazerNiver();
      $v -> apresentar();



      $a = new Aluno();
      // Aluno herdou atributos de Pessoa
      $a -> setNome("Ana Clara");
      $a -> setIdade(18);
      $a -> setSexo("F");
      // Atributos de Aluno
      $a -> setMatricula(922106960);
      $a -> setCurso("ADS");
      print_r($a);
      // Métodos de Pessoa + Aluno
      $a -> pagarMensalidade();
      $a -> cancelarMatricula();
      $a -> fazerNiver();
      $a -> apresentar();



      $b = new Bolsista();
      // Bolsista herdou atributos de Pessoa
      $b -> setNome("Demétrio");
      $b -> setIdade(19);
      $b -> setSexo("M");
      // Bolsista herdou atributos de Aluno
      $b -> setMatricula(10996940);
      $b -> setCurso("Sistema da Informação");
      // Atributo de Bolsista
      $b -> setBolsa(70);
      print_r($b);
      // Métodos de Bolsista
      $b -> pagarMensalidade();
      $b -> cancelarMatricula();

    ?>
  </pre>
</body>
</html>