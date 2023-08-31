<?php
$servername = "localhost";
$database = "clickchef";
$username = "root";
$password = "";

$conexao = mysqli_connect($servername, $username, $password, $database);

if ($conexao -> connect_errno) {
    echo "Erro";
} else {
    echo "Conexão efetuada com sucesso";
}

if($conexao->error) {
    die("Falha ao conectar ao banco de dados: " . $conexao->error);
}

?>