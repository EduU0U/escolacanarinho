<?php
require "conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$sql = $conn->prepare("INSERT INTO contato (nome, email, mensagem) VALUES (?, ?, ?)");
$sql->bind_param("sss", $nome, $email, $mensagem);

if ($sql->execute()) {
    echo "<script>alert('Mensagem enviada com sucesso!'); history.back();</script>";
} else {
    echo "Erro: " . $sql->error;
}
?>
