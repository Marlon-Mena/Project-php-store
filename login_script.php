<?php
  session_start();
  include "conexao.php";

  // Obtém os dados do formulário
  $email = $_POST['email_login'];
  $senha = $_POST['senha_login'];

  // Prepara a consulta para verificar se o email existe no banco de dados
  $sql = "SELECT * FROM `pessoas` WHERE `email` = '$email'";

  // Executa a consulta
  $result = mysqli_query($conn, $sql);

  // Verifica se o email existe
  if(mysqli_num_rows($result) > 0) {
      // O usuário foi encontrado, então verifica a senha
      $user = mysqli_fetch_assoc($result);
      if($user['senha'] == $senha) {
          // A senha está correta, faz o login
          $_SESSION['mensagem'] = "Bem-vindo, $user[nome]!";
          header("Location: home_page.html"); // Redireciona para a página de sucesso
          exit();
      } else {
          // A senha está incorreta
          $_SESSION['mensagem'] = "Senha incorreta.";
          header("Location: login.php"); // Redireciona para a página de login
          exit();
      }
  } else {
      // O email não foi encontrado
      $_SESSION['mensagem'] = "Email não encontrado.";
      header("Location: login.php"); // Redireciona para a página de login
      exit();
  }
?>
