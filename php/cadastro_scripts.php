<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO `pessoas` (`nome`, `email`, `senha`) VALUES ('$nome','$email','$senha')";

if (mysqli_query($conn, $sql)) {
    $mensagem = "$nome Cadastrado com sucesso!";
    header("Location: cadastro.php?status=sucesso&mensagem=" . urlencode($mensagem));
} else {
    $mensagem = "$nome NÃO FOI CADASTRADO. Tente novamente.";
    header("Location: cadastro.php?status=erro&mensagem=" . urlencode($mensagem));
}
exit();
?>
