<?php
  include "conexao.php";

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "INSERT INTO `pessoas`
  (`nome`, `email`, `senha`) VALUES ('$nome','$email','$senha')";

  if(mysqli_query($conn, $sql)) {
    $_SESSION['mensagem'] = "$nome Cadastrado com sucesso!";
    header("Location: cadastro.php"); // Redireciona para a página sucesso.php
    exit(); // Encerra o script para garantir que o redirecionamento ocorra
  }
  else {
      echo "$nome NÃO FOI CADASTRADO";
  }
?>