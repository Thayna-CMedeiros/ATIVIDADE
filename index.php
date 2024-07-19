
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
     <!-- Formulário para enviar dados para adicionar um novo usuário -->
    <div class="container">
        <h2>Formulário para Adicionar Usuário</h2>
        <form method="post" action="./php/conexao.php" class="form" autocomplete="off">
            <input type="hidden" name="action" value="create">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <input type="submit" class="btn" value="Adicionar">
        </form>

 <!-- Formulário para enviar dados para exibir a lista de usuários -->
        <h2>Formulário para Ler Usuários</h2>
        <form method="post" action="./php/conexao.php" class="form" autocomplete="off">
            <input type="hidden" name="action" value="read">
            <input type="submit" class="btn" value="Ler">
        </form>

 <!-- Formulário para enviar dados para atualizar o usuário existente -->
        <h2>Formulário para Atualizar Usuário</h2>
        <form method="post" action="./php/conexao.php" class="form" autocomplete="off">
            <input type="hidden" name="action" value="update">
            <label for="id-update">ID:</label>
            <input type="text" id="id-update" name="id">
            <label for="nome-update">Novo Nome:</label>
            <input type="text" id="nome-update" name="nome">
            <label for="email-update">Novo Email:</label>
            <input type="text" id="email-update" name="email">
            <input type="submit" class="btn" value="Atualizar">
        </form>


        <!-- Seção para excluir um usuário -->
        <h2>Formulário para Excluir Usuário</h2>
        <form method="post" action="./php/conexao.php" class="form" autocomplete="off">
            <input type="hidden" name="action" value="delete">
            <label for="id-delete">ID:</label>
            <input type="text" id="id-delete" name="id">
            <input type="submit" class="btn" value="Excluir">
        </form>
    </div>


</body>
</html>
