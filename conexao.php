<?php
    $server = "localhost:3307"; // servidor / porta
    $user = "root"; // usuario
    $pass = ""; // sua senha ou a senha que você configurou
    $bd = "Store";

    $conexao = mysqli_connect($server, $user, $pass, $bd);

    //teste para ver se está conectado ou não
    if ( $conn = $conexao) {
        echo "Conectado! ";
    } else {
        echo "Erro: " . mysqli_connect_error();
    }
?>
