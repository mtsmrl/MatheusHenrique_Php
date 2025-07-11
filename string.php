<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  $age = 16;
  print "Você tem " . $age ." anos.<br>";
  print "Você tem $age anos. <br> ";
  print 'Você tem  $age  anos. <br>'; #aspas simples nao sao interpretadas
  print "hoje é seu aniversário de $age º!<br>";
    ?>
    <?php
    $cidade = "Joinville";
    $estado = "Santa Catarina";
    $idade = 174;
    $frase_capital = "A cidade de $cidade é a capital do $estado";
    $frase_idade = "A cidade de $cidade tem mais de $idade anos.";
    echo "<h3>$frase_capital</h3>";
    echo "<h4>$frase_idade</h4>";
    ?>

</body>
</html>