<?php
require "conexao.php";

$servico = $_POST["servico"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$data_desejada = $_POST["data_desejada"];
$observacoes = $_POST["observacoes"];

$sql = $conn->prepare("INSERT INTO orcamentos 
(servico, nome, email, telefone, endereco, cidade, uf, data_desejada, observacoes) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

$sql->bind_param(
    "sssssssss",
    $servico, $nome, $email, $telefone, $endereco,
    $cidade, $uf, $data_desejada, $observacoes
);

if ($sql->execute()) {
    echo "<script>alert('Orçamento enviado com sucesso!'); history.back();</script>";
} else {
    echo "Erro: " . $sql->error;
}
?>
