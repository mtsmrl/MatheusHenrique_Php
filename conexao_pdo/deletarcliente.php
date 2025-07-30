<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cliente</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Excluir Cliente</h2>
    <form action="processarDelecao.php" method="POST">
        <label for="id">ID do Cliente:</label>
        <input type="number" id="id" name="id" required>

        <button type="submit">Excluir Cliente</button>
    </form>    
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