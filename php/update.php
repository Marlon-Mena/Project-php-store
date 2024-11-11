<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conexão com o banco de dados
    include 'conexao.php';

    // Recebe os dados do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; // A senha pode ser criptografada antes de salvar no banco

    // Atualiza o usuário no banco de dados
    $sql = "UPDATE pessoas SET nome = '$nome', email = '$email', senha = '$senha' WHERE cod_pessoa = '$id'";

    if (mysqli_query($conn, $sql)) {
        // Redireciona de volta para a página de pesquisa
        header("Location: pesquisa.php?cadastro=success");
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
}
?>