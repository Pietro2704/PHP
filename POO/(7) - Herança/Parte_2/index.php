<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    <?php
      require_once "Visitante.php";
      require_once "Professor.php";
      require_once "Aluno.php";
      require_once "Bolsista.php";
      require_once "Tecnico.php";

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



      $p = new Professor();
      // Professor herdou atributos de Pessoa
      $p -> setNome("Traue");
      $p -> setIdade(38);
      $p -> setSexo("M");
      // Atributos de Professor
      $p -> setEspecialidade("Javascript");
      $p -> setSalario(1200);
      print_r($p);
      // Métodos de Pessoa + Professor
      $p -> fazerNiver();
      $p -> ReceberAumento(60);
      $p -> apresentar(); // Foi sobrescrito na para a classe Professor



      $a = new Aluno();
      // Aluno herdou atributos de Pessoa
      $a -> setNome("Ana Clara");
      $a -> setIdade(18);
      $a -> setSexo("F");
      // Atributos de Aluno
      $a -> setMatricula(922106960);
      $a -> setCurso("Enfermagem");
      print_r($a);
      // Métodos de Pessoa + Aluno
      $a -> fazerNiver();
      $a -> apresentar(); // Foi sobrescrito na para a classe Aluno
      $a -> pagarMensalidade();
      $a -> cancelarMatricula();



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
      // Métodos de Pessoa + Aluno + Bolsista
      $b -> fazerNiver();
      $b -> apresentar(); // Foi sobrescrito na para a classe Bolsista
      $b -> renovarBolsa();
      $b -> pagarMensalidade(); // Foi sobrescrito na para a classe Bolsista
      $b -> cancelarMatricula();



      $t = new Tecnico();
      // Tecnico herdou atributos de Pessoa
      $t -> setNome("Yago");
      $t -> setIdade(20);
      $t -> setSexo("M");
      // Tecnico herdou atributos de Aluno
      $t -> setMatricula(6942069);
      $t -> setCurso("ADS");
      // Atributo de Tecnico
      $t -> setRegistroProfissional(4554);
      print_r($t);
      // Métodos de Pessoa + Aluno + Tecnico
      $t -> fazerNiver();
      $t -> apresentar(); // Foi sobrescrito na para a classe Tecnico
      $t -> praticar();
      $t -> pagarMensalidade(); // Foi sobrescrito na para a classe Tecnico
      $t -> cancelarMatricula();


    ?>
  </pre>
</body>
</html>