<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
    <link rel="stylesheet" href="">
</head>
<body>

<div class="container"> <!-- Corrigido de "contêiner" para "container" -->
    <div class="row">
        <div class="col">
            <h1>Pesquisar</h1>
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline" action="pesquisa.php" method="POST"> <!-- Corrigido "método" para "method" -->
                    <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Investigar</button>
                </form>
            </nav>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Data de Nascimento</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Nome</th>
                        <td>Rua X</td>
                        <td>89 9 9999 8887</td>
                        <td>fulanodetal@prov.com.br</td>
                        <td>07/09/1990</td> 
                    </tr>
                </tbody>
            </table>

            <a href="index.php" class="btn btn-info">Voltar para o início</a>
        </div>
    </div>
</div>

</body>
</html>


<?php

    if(insset($_POST['busca'])) {
        $pesquisa = $_POST['busca'];
    }
    else {
        $pesquisa = '';
    }

    include "conexao.php";

    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

?>



