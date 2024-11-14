<?php
include "conexao_produto.php";

// Verifique se os dados foram enviados antes de acessar
if (isset($_POST['url']) && isset($_POST['nome']) && isset($_POST['description']) && isset($_POST['preco'])) {
    $url = $_POST['url'];
    $nome = $_POST['nome'];
    $description = $_POST['description'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO `produtos` (`url`, `nome`, `description`, `preco`) VALUES ('$url', '$nome', '$description', '$preco')";
    
    // Execute a consulta
    if (mysqli_query($conexao_produto, $sql)) {
        echo "Produto inserido com sucesso!";
    } else {
        echo "Erro ao inserir produto: " . mysqli_error($conexao_produto);
    }
} else {
    echo "Por favor, preencha todos os campos do formulário.";
}
?>
