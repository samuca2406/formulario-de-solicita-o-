<?php
include("conexao.php");
$sql = "SELECT * FROM cadastro";
$result = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="estilo.css">

<div class="container">
    <h2>Lista de Usuários</h2>
    <table>
        <tr>
            <th>Tipo do solicitante</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Município</th>
            <th>Logradouro</th>
            <th>Rua</th>
            <th>Calçada</th>
            <th>Coord. Norte</th>
            <th>Coord. Leste</th>
            <th>Bairro</th>
            <th>Número</th>
            <th>Contato</th>
            <th>Referência</th>
            <th>Observação</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['tipo_do_solicitante']; ?></td>
            <td><?= $row['nome']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['cpf']; ?></td>
            <td><?= $row['municipio']; ?></td>
            <td><?= $row['logradouro']; ?></td>
            <td><?= $row['rua']; ?></td>
            <td><?= $row['calcada']; ?></td>
            <td><?= $row['coordenada_norte']; ?></td>
            <td><?= $row['coordenada_leste']; ?></td>
            <td><?= $row['bairro']; ?></td>
            <td><?= $row['numero']; ?></td>
            <td><?= $row['contato']; ?></td>
            <td><?= $row['referencia']; ?></td>
            <td><?= $row['observacao']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>