<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 // Declara variável numérica
 $nota = 7;
 // Testa se $nota maior que 7. 
 $Aprovado = ($nota >=7);
 $Reprovado = ($nota < 5);
 $Recuperacao = ($nota < 7 & $nota >= 5);
 if ($Aprovado) {
     echo "Aprovado";
 }
    else if ($Recuperacao) {
        echo "Recuperação";
    }
    else {
        echo "Reprovado";
    }
 ?> 
  <adress>
        <center>
            Matheus Henrique Coelho Amaral
        </center>
    </adress>
</body>
</html>