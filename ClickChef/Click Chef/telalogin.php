<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if (strlen($_POST['email'])==0) {
        echo "Preencha seu email";
    } else if (strlen($_POST['senha'])==0){
        echo "Preencha sua senha";
    }
    else {
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sql_code = "SELECT `idcliente`, `email`, `senha` FROM `cadastrocliente` WHERE email = '$email' senha = '$senha' AND nome = '$nome'";
        $sql_query = $conexao->query($sql_code) or die("Falha na conexão SQL: " . $conexao->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $cadastrocliente = $sql_query->fetch_assoc();
            
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['idcliente'] = $cadastrocliente ['idcliente'];            
            $_SESSION['nome'] = $cadastrocliente ['nome'];
            $_SESSION['email'] = $cadastrocliente ['email'];

            header("Location: paginicial.php");

        } else{
            echo "Falha ao logar! Email ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">
    <div class="container">
        <!-- first content -->
        <div class="content first-content">
            <div class="first-column">
                <img src="" alt="">
                <h2 class="title title-primary">Bem vindo de volta!</h2>
                <p class="description description-primary">Funcionário?</p>
                <p class="description description-primary" style="margin-top: -5px;">Conecte-se por aqui</p>
                <button id="signin" class="btn btn-primary">Funcionário</button>
            </div>

            <!-- second column -->
            <div class="second-column">
                <h2 class="title title-second" style="margin-top: -20px; margin-bottom: 30px;">Entrar no Click Chef</h2>
                <form class="form">
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email">
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>
                    <p class="password">Não possui cadastro? <a class="password" href="./cadastrousuario.php">Cadastre-se!</a></p>
                    <button class="btn btn-second">Entrar</button>
                </form>
            </div>
        </div>

        <!-- second-content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá Amigo!</h2>
                <p class="description description-primary">Insira seus dados pessoais</p>
                <p class="description description-primary">e descubra nossa variedade de refeições</p>
                <button id="signup" class="btn btn-primary">Cliente</button>
            </div>

            <!-- second column -->
            <div class="second-column">
                <h2 class="title title-second" style="margin-top: -20px; margin-bottom: 30px;">Entrar no Click Chef</h2>
                <form class="form">
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="admemail" placeholder="Email">
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="admsenha" placeholder="Senha">
                    </label>
                    <button class="btn btn-second">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    </form>
    <script src="./app.js"></script>
</body>

</html>