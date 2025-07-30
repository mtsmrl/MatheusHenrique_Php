<?php
    require 'conexao_pdo.php';

$conexao = conectarBanco();
$stmt = $conexao->prepare("Select * from cliente");
$stmt->execute();
$clientes = $stmt->fetchAll();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <h2>Lista de Clientes</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
<?php foreach($clientes as $cliente):?>     
    <tr>
        <td><?=htmlspecialchars($cliente["id_cliente"])?></td>           
        <td><?=htmlspecialchars($cliente["nome"])?></td>           
        <td><?=htmlspecialchars($cliente["endereco"])?></td>           
        <td><?=htmlspecialchars($cliente["telefone"])?></td>           
        <td><?=htmlspecialchars($cliente["email"])?></td>    
    </tr>
     <?php endforeach; ?>
</table>  
<!-- Navegação fixa no topo -->
   <!-- Navegação fixa no topo -->
   <div class="navbar">
        <a href="index.php">Início</a>
        <a href="inserirCliente.php">Inserir</a>
        <a href="pesquisarCliente.php">Pesquisar</a>
        <a href="atualizarCliente.php">Editar</a>
        <a href="deletarcliente.php">Excluir</a>
        <a href="listarClientes.php">Listar</a>
    </div>
</body>
</html>