<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- 
    POLI = muitos
    Morfo = forma

    Polimorfismo: 
      Permite que um mesmo nome represente vários comportamentos diferentes

    Assinatura do Método: 
      Quantidade e os tipos dos parâmetros

    Tipos de Polimorfismo
      1) Sobreposição
      2) Sobrecarga
      
   -->
</head>
<body>
  
  <pre>
    <?php

    // Requerindo Classes...

    require_once "Mamifero.php";
    require_once "Cachorro.php";
    require_once "Canguru.php";

    require_once "Reptil.php";
    require_once "Cobra.php";
    require_once "Tartaruga.php";

    require_once "Peixe.php";
    require_once "PeixeDourado.php";

    require_once "Ave.php";
    require_once "Arara.php";



    // Criando uma Matriz para melhor entendimento
    $animal = array(array());


    
    // 0 é Mamífero
    $animal[0][0] = new Mamifero();

    // Herdou Atributos de Animal
    $animal[0][0] -> setPeso("300 kg");
    $animal[0][0] -> setIdade(2);
    $animal[0][0] -> setMembros("Patas");
    
    // Tem seu próprio atributo
    $animal[0][0] -> setCorPelo("Cinza");

    print_r($animal[0][0]);

    // Herdou Métodos de Animal
    $animal[0][0] -> locomover();
    $animal[0][0] -> alimentar();
    $animal[0][0] -> emitirSom();

    echo "<hr>";// ______________________________________

          // Na coluna dos Mamíferos temos o Canguru
          $animal[0][1] = new Canguru();

          // Herdou Atributos de Animal
          $animal[0][1] -> setPeso("25 kg");
          $animal[0][1] -> setIdade(16);
          $animal[0][1] -> setMembros("Patas");

          // Herdou Atributos de Mamífero
          $animal[0][1] -> setCorPelo("Laranja");

          print_r($animal[0][1]);
          
          // Herdou Métodos de Animal
          $animal[0][1] -> locomover(); // Sobrescrito na cla
          $animal[0][1] -> alimentar();
          $animal[0][1] -> emitirSom();

          // Tem seu próprio Método
          $animal[0][1] -> usarBolsa();

    echo "<hr>";// ______________________________________

          // Na coluna dos Mamíferos temos o Cachorro
          $animal[0][2] = new Cachorro();

          // Herdou Atributos de Animal
          $animal[0][2] -> setPeso("10 kg");
          $animal[0][2] -> setIdade(16);
          $animal[0][2] -> setMembros("Patas");

          // Herdou Atributos de Mamífero
          $animal[0][2] -> setCorPelo("Laranja");

          print_r($animal[0][2]);
          
          // Herdou Métodos de Animal
          $animal[0][2] -> locomover();
          $animal[0][2] -> alimentar();
          $animal[0][2] -> emitirSom();

          // Tem seus próprios Métodos
          $animal[0][2] -> abanarRabo();
          $animal[0][2] -> enterrarOsso();

          
          
          
          
          
  
          
          
    echo "<hr>";// ______________________________________
          
    // 1 é Réptil
    $animal[1][0] = new Reptil();

    // Herdou Atributos de Animal
    $animal[1][0] -> setPeso("5 kg");
    $animal[1][0] -> setIdade(120);
    $animal[1][0] -> setMembros("Casco");
    
    // Tem seu próprio atributo
    $animal[1][0] -> setCorEscama("Verde");
    
    print_r($animal[1][0]);
    
    // Herdou Métodos de Animal
    $animal[1][0] -> locomover();
    $animal[1][0] -> alimentar();
    $animal[1][0] -> emitirSom();

    echo "<hr>";// ______________________________________
          
          // Na coluna de Reptil temos a Cobra
          $animal[1][1] = new Cobra();

          // Herdou Atributos de Animal
          $animal[1][1] -> setPeso("2 kg");
          $animal[1][1] -> setIdade(30);
          $animal[1][1] -> setMembros("Nenhum");
          
          // Herdou Atributos de Reptil
          $animal[1][1] -> setCorEscama("Verde");

          print_r($animal[1][1]);
          
          // Herdou Métodos de Animal
          $animal[1][1] -> locomover();
          $animal[1][1] -> alimentar();
          $animal[1][1] -> emitirSom();

    echo "<hr>";// ______________________________________
          
          // Na coluna de Reptil temos a Tartaruga
          $animal[1][2] = new Tartaruga();

          // Herdou Atributos de Animal
          $animal[1][2] -> setPeso("5 kg");
          $animal[1][2] -> setIdade(120);
          $animal[1][2] -> setMembros("Casco");
          
          // Herdou Atributos de Reptil
          $animal[1][2] -> setCorEscama("Verde");

          print_r($animal[1][2]);
          
          // Herdou Métodos de Animal
          $animal[1][2] -> locomover(); // Sobrescrito pela classe
          $animal[1][2] -> alimentar();
          $animal[1][2] -> emitirSom();

          
          
          
          
          
  
          

    echo "<hr>";// ______________________________________
    
    // 2 é Peixe
    $animal[2][0] = new Peixe();

    // Herdou Atributos de Animal
    $animal[2][0] -> setPeso("1 kg");
    $animal[2][0] -> setIdade(3);
    $animal[2][0] -> setMembros("Nadadeiras");

    // Tem seu próprio atributo
    $animal[2][0] -> setCorEscama("Azul");

    print_r($animal[2][0]);
    
    // Herdou Métodos de Animal
    $animal[2][0] -> locomover();
    $animal[2][0] -> alimentar();
    $animal[2][0] -> emitirSom();

    // Tem seu próprio método
    $animal[2][0] -> soltarBolhas();

    echo "<hr>";// ______________________________________

          // Na coluna de Peixe temos o PeixeDourado
          $animal[2][1] = new PeixeDourado();

          // Herdou Atributos de Animal
          $animal[2][1] -> setPeso("5 kg");
          $animal[2][1] -> setIdade(120);
          $animal[2][1] -> setMembros("Casco");
          
          // Herdou Atributos de Peixe
          $animal[2][1] -> setCorEscama("Verde");

          print_r($animal[2][1]);
          
          // Herdou Métodos de Animal
          $animal[2][1] -> locomover();
          $animal[2][1] -> alimentar();
          $animal[2][1] -> emitirSom();

          // Herdou Métodos de Peixe
          $animal[2][1] -> soltarBolhas();
          

          
          
          
          
          
  
          

    echo "<hr>";// ______________________________________
    
    // 3 é Ave
    $animal[3][0] = new Ave();

    // Herdou Atributos de Animal
    $animal[3][0] -> setPeso("2 kg");
    $animal[3][0] -> setIdade(7);
    $animal[3][0] -> setMembros("asas");

    // Tem seu próprio atributo
    $animal[3][0] -> setCorPena("Vermelho");

    print_r($animal[3][0]);

    // Herdou Métodos de Animal
    $animal[3][0] -> locomover();
    $animal[3][0] -> alimentar();
    $animal[3][0] -> emitirSom();
    
    // Tem seu próprio método
    $animal[3][0] -> fazerNinho();

    echo "<hr>";// ______________________________________

        // Na coluna de Ave temos a Arara
        $animal[3][1] = new Arara();

        // Herdou Atributos de Animal
        $animal[3][1] -> setPeso("5 kg");
        $animal[3][1] -> setIdade(120);
        $animal[3][1] -> setMembros("Casco");
        
        // Herdou Atributos de Arara
        $animal[3][1] -> setCorPena("Verde");

        print_r($animal[3][1]);
        
        // Herdou Métodos de Animal
        $animal[3][1] -> locomover();
        $animal[3][1] -> alimentar();
        $animal[3][1] -> emitirSom();

         // Herdou Métodos de Ave
         $animal[3][1] -> fazerNinho();
    
    //print_r($animal);
    ?>
  </pre>
</body>
</html>