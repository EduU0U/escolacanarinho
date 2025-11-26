<?php
require "conexao.php";
$result = $conn->query("SELECT * FROM contato ORDER BY id DESC");
?>
<h2>Mensagens de Contato</h2>
<table border="1" cellpadding="10">
<tr><th>ID</th><th>Nome</th><th>Email</th><th>Mensagem</th><th>Data</th></tr>

<?php while ($d = $result->fetch_assoc()): ?>
<tr>
    <td><?= $d['id'] ?></td>
    <td><?= $d['nome'] ?></td>
    <td><?= $d['email'] ?></td>
    <td><?= $d['mensagem'] ?></td>
    <td><?= $d['data_envio'] ?></td>
</tr>
<?php endwhile; ?>
</table>
