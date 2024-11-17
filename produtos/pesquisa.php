<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="icon" href="../images/home_page/logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .navbar {
            border-radius: 5px;
        }
        .table thead {
            background-color: #007bff;
            color: white;
        }
        .btn-edit, .btn-clear {
            font-size: 0.875rem;
            border-radius: 5px;
        }
        .btn-edit {
            background-color: #28a745;
            color: white;
        }
        .btn-clear {
            background-color: #dc3545;
            color: white;
        }
        .btn-info {
            margin-top: 20px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="text-center mb-4">Pesquisar Usuários</h1>

            <!-- Barra de pesquisa -->
            <div class="card mb-4">
                <div class="card-body">
                    <nav class="navbar navbar-light bg-light">
                        <form class="form-inline" action="pesquisa.php" method="POST">
                            <input class="form-control form-control-lg me-2" type="search" placeholder="Digite o nome" aria-label="Search" name="busca" autofocus>
                            <button class="btn btn-outline-primary btn-lg" type="submit" style="margin-top: 10px;">Pesquisar</button>
                        </form>
                    </nav>
                </div>
            </div>

            <!-- Tabela de resultados -->
            <div class="table-responsive" style="width: 140%; position:relative; left: -150px;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "conexao_produto.php"; // Conexão com o banco de dados

                        // Função para exibir mensagem de sucesso
                        function exibirMensagem($tipo, $mensagem) {
                            echo "<div class='alert alert-$tipo'>$mensagem</div>";
                        }

                        // Função para buscar usuários no banco de dados
                        function buscarUsuarios($conn, $pesquisa) {
                            $sql = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisa%'";
                            return mysqli_query($conn, $sql);
                        }

                        // Captura da pesquisa
                        $pesquisa = isset($_POST['busca']) ? $_POST['busca'] : '';

                        // Exibe mensagem de sucesso
                        if (isset($_GET['cadastro']) && $_GET['cadastro'] == 'success') {
                            exibirMensagem('success', 'Usuário cadastrado com sucesso!');
                        }

                        if (isset($_GET['delete']) && $_GET['delete'] == 'success') {
                            exibirMensagem('success', 'Usuário excluído com sucesso!');
                        }

                        // Consulta ao banco de dados
                        $dados = buscarUsuarios($conn, $pesquisa);

                        // Exibe os resultados
                        if ($dados && mysqli_num_rows($dados) > 0) {
                            while ($linha = mysqli_fetch_assoc($dados)) {
                                $codigo = $linha['codigo'];
                                $url = $linha['url'];
                                $nome = $linha['nome'];
                                $description = $linha['description']; 
                                $preco = $linha['preco']; 
                                // Para fins de exemplo, a senha não está criptografada

                                echo "<tr>
                                        <th scope='row'>$codigo</th>
                                        <td><img src='$url' style='width: 100px; height: auto;'></td>
                                        <td>$nome</td>
                                        <td>$description</td>
                                        <td>$preco,00</td>
                                        <td>
                                            <button class='btn btn-edit btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' data-id='$codigo' data-image='$url' data-nome='$nome' data-descricao='$description' data-preco='$preco'>Editar</button>
                                            <a href='delete.php?id=$codigo' class='btn btn-clear btn-sm'>Excluir</a>
                                        </td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center'>Nenhum resultado encontrado</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Botão de voltar -->
            <a href="admin.php" class="btn btn-info w-100">Voltar para o início</a>
        </div>
    </div>
</div>

<!-- Modal de edição -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Produtos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" id="edit-id">
                    <div class="mb-3">
                        <label for="edit-image" class="form-label">Imagem</label>
                        <input type="url" class="form-control" id="edit-image" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="edit-nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-description" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="edit-description" name="description" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-preco" class="form-label">Preço</label>
                        <input type="number" class="form-control" id="edit-preco" name="preco" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Preencher os campos do modal com os dados do usuário
    const editButtons = document.querySelectorAll('[data-bs-toggle="modal"]');
    editButtons.forEach(button => {
        button.addEventListener('click', function() {
            const modal = new bootstrap.Modal(document.getElementById('editModal'));
            document.getElementById('edit-id').value = this.getAttribute('data-id');
            document.getElementById('edit-image').value = this.getAttribute('data-image');
            document.getElementById('edit-nome').value = this.getAttribute('data-nome');
            document.getElementById('edit-description').value = this.getAttribute('data-descricao');
            document.getElementById('edit-preco').value = this.getAttribute('data-preco');
            modal.show();
        });
    });
</script>

</body>
</html>
