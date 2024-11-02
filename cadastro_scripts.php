<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/cadastro.css"> <!-- o caminho do css -->
    <title>Store</title>
  </head>
  <body>
<!--cadastro de usuário-->
    <div class="container">
        <div class="row">
            <?php
            include "conexao.php";

            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];

            $sql = "INSERT INTO `pessoas`
            (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";
            
            if(mysqli_query($conn, $sql)) {
                echo "$nome Cadastrado com sucesso!";
            }
            else {
                echo "$nome NÂO FOI CADASTRADO";
            }
            ?>
            <a href="index.php" class="btn-voltar">Home</a>
        </div>
    </div>

  </body>
</html>