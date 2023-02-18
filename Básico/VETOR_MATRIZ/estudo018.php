<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

    <!--count
    array_push
    array_pop
    array_unshift
    array_shift
    sort-->


  <?php

    $v = array("Pietro","Giovanna","Valdeir","Vanessa","Hebert","Taina","Richard","Fernando","Beatriz");
    
    //-----------------------------------------------------------------------------------------------------
    count
    echo "<h1>1</h1>";
    // INICIAL
    $count = count($v);
    echo "<br>Esse vetor tem $count elementos<br>";
    print_r($v);
    echo "<hr>";

    echo "<br>"; //---------------------------------------------------------------------------------------

    
    echo "<h1>2</h1>";
    //ADD ALVARO EM ULTIMO
    $v[] = "Alvaro";
    $count = count($v);
    echo "<br>Agora ele tem $count elementos<br>";
    print_r($v);
    echo "<hr>";

    echo "<br>"; //---------------------------------------------------------------------------------------
    
    array_push
    echo "<h1>3</h1>";
    //ADD UM NUMERO EM ULTIMO
    array_push($v,3);
    $count = count($v);
    echo "<br>Agora ele tem $count elementos<br>";
    print_r($v);
    echo "<hr>";

    echo "<br>"; //---------------------------------------------------------------------------------------
    
    array_pop
    echo "<h1>4</h1>";
    //TIRAMOS O NUMERO
    array_pop($v);
    $count = count($v);
    echo "<br>Agora ele tem $count elementos<br>";
    print_r($v);
    echo "<hr>";

    echo "<br>"; //---------------------------------------------------------------------------------------
    
    array_unshift
    echo "<h1>5</h1>";
    //
    array_unshift($v,8);
    $count = count($v);
    echo "<br>Agora ele tem $count elementos<br>";
    print_r($v);
    echo "<hr>";

    echo "<br>"; //---------------------------------------------------------------------------------------
    
    array_shift
    echo "<h1>6</h1>";
    //
    array_shift($v);
    $count = count($v);
    echo "<br>Agora ele tem $count elementos<br>";
    print_r($v);
    echo "<hr>";

    echo "<br>"; //---------------------------------------------------------------------------------------
    
    sort
    echo "<h1>7</h1>";
    //
    sort($v);
    $count = count($v);
    echo "<br>Agora ele tem $count elementos que estão em ordem crescente<br>";
    print_r($v);
    echo "<hr>";

    echo "<br>"; //---------------------------------------------------------------------------------------
    
    rsort
    echo "<h1>8</h1>";
    //
    rsort($v);
    $count = count($v);
    echo "<br>Agora ele tem $count elementos que estão em ordem decrescente<br>";
    print_r($v);
    echo "<hr>";

    
  ?>
</body>
</html>