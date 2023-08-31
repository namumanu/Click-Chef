<?php
include "conexao.php";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$complemento = $_POST['complemento'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO `cadastrocliente`(`nome`, `sobrenome`, `endereco`, `telefone`, `complemento`, `cpf`, `email`, `senha`) 
VALUES ('$nome','$sobrenome','$endereco','$telefone','$complemento','$cpf','$email','$senha')";

$cadastrar = mysqli_query($conexao, $sql);

?>