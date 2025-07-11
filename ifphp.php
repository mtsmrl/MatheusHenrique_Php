<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso do SE</title>
</head>
<body>
    <?php
    $nome = "Xenia";
    //$nome = NULL;
    if (isset($nome)) {
        echo "Essa linha não será exibida se $nome for NULL.<br>";
    }
    ?>
     <adress>
        <center>
            Matheus Henrique Coelho Amaral
        </center>
    </adress>
</body>
</html>