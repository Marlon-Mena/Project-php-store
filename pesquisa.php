<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
    <link rel="stylesheet" href="">

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Pesquisar</h1>
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline" action="pesquisa.php" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </nav>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Senha</th>
                    </tr>
                </thead>
                <tbody>




                    <?php
                    //conexão
                    include "conexao.php";

                    //buscar
                    $pesquisa = isset($_POST['busca']) ? $_POST['busca'] : '';

                    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
                    $dados = mysqli_query($conn, $sql);

                    //resultados
                    if ($dados && mysqli_num_rows($dados) > 0) {
                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $cod_pessoa = $linha['cod_pessoa'];
                            $nome = $linha['nome'];
                            $email = $linha['email'];

                            //criptografia com ou sem
                            //$senha = str_repeat('*', strlen($linha['senha']));
                            $senha = $linha['senha'];

                            echo "<tr>
                                    <th scope='row'>$cod_pessoa</th>
                                    <td>$nome</td>
                                    <td>$email</td>
                                    <td>$senha</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>Nenhum resultado encontrado</td></tr>";
                    }
                    ?>



                </tbody>
            </table>
            <a href="index.html" class="btn btn-info">Voltar para o início</a>
        </div>
    </div>
</div>
</body>
</html>
