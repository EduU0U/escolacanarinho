<?php
require "conexao.php";
$result = $conn->query("SELECT * FROM orcamentos ORDER BY id DESC");
?>
<h2>Pedidos de Orçamento</h2>
<table border="1" cellpadding="10">
<tr>
<th>ID</th><th>Serviço</th><th>Nome</th><th>Email</th><th>Telefone</th>
<th>Cidade</th><th>UF</th><th>Data</th><th>Enviado em</th>
</tr>

<?php while ($d = $result->fetch_assoc()): ?>
<tr>
<td><?= $d['id'] ?></td>
<td><?= $d['servico'] ?></td>
<td><?= $d['nome'] ?></td>
<td><?= $d['email'] ?></td>
<td><?= $d['telefone'] ?></td>
<td><?= $d['cidade'] ?></td>
<td><?= $d['uf'] ?></td>
<td><?= $d['data_desejada'] ?></td>
<td><?= $d['data_envio'] ?></td>
</tr>
<?php endwhile; ?>
</table>
