<?php
// Configuração de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para adicionar dados
if (isset($_POST['action']) && $_POST['action'] == 'create') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO cliente (nome, email) VALUES ('$nome', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso<br>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Função para ler dados
if (isset($_POST['action']) && $_POST['action'] == 'read') {
    $sql = "SELECT id, nome, email FROM cliente";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output de dados em cada linha
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>";
        }
    } else {
        echo "0 resultados";
    }
}

// Função para excluir dados
if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    $id = $_POST['id'];

    $sql = "DELETE FROM cliente WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro excluído com sucesso<br>";
    } else {
        echo "Erro ao excluir registro: " . $conn->error;
    }
}

$conn->close();
?>
