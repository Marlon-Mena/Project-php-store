<?php
    $server = "localhost:3307"; // servidor / porta
    $user = "root"; // usuario
    $pass = ""; // sua senha ou a senha que você configurou
    $bd = "store";

    // Conectando ao banco de dados
    $conexao_produto = mysqli_connect($server, $user, $pass, $bd);

    // Teste para ver se está conectado ou não
    if ( $conn = $conexao_produto) {
        echo "Conectado! ";
    } else {
        echo "Erro: " . mysqli_connect_error();
    }
?>
