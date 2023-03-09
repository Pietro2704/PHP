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
    // Requere classes
      require_once "Pessoa.php";
      require_once "Aluno.php";
      require_once "Professor.php";
      require_once "Funcionario.php";


    // Facilita criação de objeto
      $pe = array();
      $al = array();
      $prof = array();
      $func = array();

    // Criando Objetos
      $pe[] = new Pessoa();
      $al[] = new Aluno();
      $prof[] = new Professor();
      $func[] = new Funcionario();

    // Colocando o principal em cada classe
      $pe[0] -> setNome("Pietro");
      $pe[0] -> setSexo("M");
      $pe[0] -> setIdade(20);

      $al[0] -> setNome("Maria");
      $al[0] -> setCurso("ADS");
      $al[0] -> setMatricula(922106960);

      $prof[0] -> setNome("Rafael");
      $prof[0] -> setSalario(1200);
      $prof[0] -> setEspecialidade("Javascript");
      
      $func[0] -> setNome("Ana");
      $func[0] -> setSetor("Limpeza");
      $func[0] -> setTrabalhando(true);

    // Alterando informações finais

      //$prof[0] -> ReceberAumento(50);
      //$func[0] -> demissao();
      //$al[0] -> cancelarMatricula();




    // Mostra oq aconteceu
      print_r($pe[0]);
      print_r($al[0]);
      print_r($prof[0]);
      print_r($func[0]);


    ?>
  </pre>
</body>
</html>