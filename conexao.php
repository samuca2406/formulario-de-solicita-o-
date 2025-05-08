<?php
$servidor = "localhost";
$usuario = "root";
$senha = "123456";
$dbname = "sistema_cadastro";



$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (!$conexao) {
    die("Ocorreu um erro: " . mysqli_connect_error());
}
?>
