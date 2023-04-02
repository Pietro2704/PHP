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
      $n = array(9,3,5,8,2);

      print_r($n);

      $n[] = 7;

      echo "<br>";

      print_r($n);
    ?>
    <table border="1"><tr>
    <?php
      $c = range(5,50,9); //range eh um vetor q se inicia no 5, termina no 50 e pula de 9 em 9

      print_r($c);
      
      echo "<br><br><br>";
      foreach($c as $valor){
        echo "<td>$valor ";
      }
    ?>
    </table>
  </pre>
  <pre>
    <?php
      $v = array(1=>"A",3=>"B",6=>"C",8=>"D");
      $v[] = "E";

      unset($v[6]); // APAGA O ELEMENTO DA ARRAY ----------------


      print_r($v);

    ?>
    <?php
      $a = array("nome" => "Ana","idade" => 21,"peso" => 56.7);
      foreach($a as $campo => $valor){
        print_r("<br>O campo $campo possui o valor $valor");
      }
    ?>
    <br>
    <fieldset><legend>MATRIZ</legend>
    <?php
      $n = array(array(2,4),
                array(7,3),
                array(9,1));
      print_r($n);
    ?>
    </fieldset>
    <fieldset><legend>MATRIZ-1</legend>
    <?php
      $n = array(array(2,4),
                array(7,3),
                array(9,1));
      print_r($n);
      $n[2][0] = $n[1][1];
      echo "<br><br><br><br><br><br>MUDANÇAS OCORRERAM.........<br><br><br><br><br>";
      print_r($n);
    ?>
    </fieldset>

    <fieldset>
      <?php
        
      ?>
    </fieldset>
    
  </pre>
  
</body>
</html>
