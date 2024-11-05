<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href=""> <!-- o caminho do css -->
    <title>Store</title>
  </head>
  <body>
<!--cadastro de usuário-->
    <div class="container">
        <div class="row">
            <?php
            include "conexao.php";

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "INSERT INTO `pessoas`
            (`nome`, `email`, `senha`) VALUES ('$nome','$email','$senha')";
            
            if(mysqli_query($conn, $sql)) {
                echo "$nome Cadastrado com sucesso!";
            }
            else {
                echo "$nome NÂO FOI CADASTRADO";
            }
            ?>
            <a href="index.html" class="btn-voltar">Home</a>
        </div>
    </div>

  </body>
</html>