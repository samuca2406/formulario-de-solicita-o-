<?php
include("conexao.php");
$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$municipio = $_POST['municipio'];
$logradouro = $_POST['logradouro'];
$rua = $_POST['rua'];
$calcada = $_POST['calcada'];
$coordenada_norte = $_POST['coordenada_norte'];
$coordenada_leste = $_POST['coordenada_leste'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$contato = $_POST['contato'];
$referencia = $_POST['referencia'];
$observacao = $_POST['observacao'];
$sql = "INSERT INTO cadastro (
    tipo_do_solicitante, nome, email, senha, cpf, municipio,
    logradouro, rua, calcada, coordenada_norte, coordenada_leste,
    bairro, numero, contato, referencia, observacao
) VALUES (
    '$tipo_do_solicitante', '$nome', '$email', '$senha', '$cpf', '$municipio',
    '$logradouro', '$rua', '$calcada', '$coordenada_norte', '$coordenada_leste',
    '$bairro', '$numero', '$contato', '$referencia', '$observacao'
)";




if (mysqli_query($conexao, $sql)) {
    header("Location: dashboard.php");
    exit;
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
}




mysqli_close($conexao);
?>
