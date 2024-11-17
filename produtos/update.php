<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conexão com o banco de dados
    include 'conexao_produto.php';

    // Recebe os dados do formulário
    $id = $_POST['id'];
    $url = $_POST['image'];
    $nome = $_POST['nome'];
    $description = $_POST['description']; 
    $preco = $_POST['preco']; 

    // Atualiza o produto no banco de dados
    $sql = "UPDATE produtos SET url = '$url', nome = '$nome', description = '$description', preco = '$preco' WHERE codigo = '$id'";

    // Executa a consulta e verifica o sucesso
    if (mysqli_query($conn, $sql)) {
        // Redireciona de volta para a página de pesquisa com mensagem de sucesso
        header("Location: pesquisa.php?cadastro=success");
        exit; // Garante que o script PHP seja interrompido após o redirecionamento
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conn);
    }
}
?>
