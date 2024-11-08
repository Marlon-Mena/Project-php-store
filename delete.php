<?php
// Conexão com o banco de dados
include 'conexao.php';

// Verifica se o ID foi passado pela URL
if (isset($_GET['id'])) {
    // Recebe o ID do usuário a ser excluído
    $id = $_GET['id'];

    // Consulta SQL para excluir o usuário
    $sql = "DELETE FROM pessoas WHERE cod_pessoa = '$id'";

    // Executa a consulta
    if (mysqli_query($conn, $sql)) {
        // Se a exclusão for bem-sucedida, redireciona para a página de pesquisa com uma mensagem de sucesso
        header("Location: pesquisa.php?delete=success");
    } else {
        // Caso ocorra algum erro, exibe uma mensagem
        echo "Erro ao excluir: " . mysqli_error($conn);
    }
} else {
    // Caso o ID não tenha sido passado, redireciona para a página de pesquisa
    header("Location: pesquisa.php");
}
?>