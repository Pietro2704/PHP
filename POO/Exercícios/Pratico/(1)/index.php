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
    // Requerindo Classe
    require_once "Pessoa.php";
    require_once "Livro.php";

    // Facilitando a criação do objeto
    $person = array();
    $person[] = new Pessoa("Pietro",21,"Masculino");
    $person[] = new Pessoa("Yago",20,"Masculino");
    $person[] = new Pessoa("Edmar",24,"Masculino");
    $person[] = new Pessoa("Demétrio",20,"Masculino");
    
    $book = array();
    $book[] = new Livro("Código Limpo","Robert C. Martin",425);
    $book[] = new Livro("Programação para Leigos","Maria Aragão",500);
    $book[] = new Livro("Vendendo seu primeiro carro","Rerbert Richards",250);
    $book[] = new Livro("NBL Champions","Lebron James",315);

    $book[0] -> leitor($person[0]);
    /*
    $book[0] -> abrir();
    $book[0] -> fechar();
    $book[0] -> folhear(69);


    $book[0] -> detalhe();


    */
    
    //Apresentando cada pessoa
    for($i=0;$i<=count($person)-1;$i++){
      $person[$i] -> apresentar();
    }
    
    // Detalhando cada livro
    for($i=0;$i<=count($book)-1;$i++){
      $book[$i] -> detalhe();
    }
    
    


  ?>
  </pre>
</body>
</html>