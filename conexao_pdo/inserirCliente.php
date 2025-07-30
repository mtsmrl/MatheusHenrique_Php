<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="styles.css">
<body>
    <h2>Cadastro de Cliente</h2>
    <form action="processarInsercao.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Cadastrar Cliente</button>

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