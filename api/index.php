<?php 
phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./partials/cabecalho.php" ?>
    <title>Login</title>
</head>

<body class="blue">
    <div class="container center-align">
        <div class="row blue lighten-3">
            <div class="col s12 m6 offset-m3">
                <h1 class="white-text">Bem Vindo!</h1>
                <p class="subtitulo">Selecione a opção para fazer seu login</p>
                <div class="row">
                    <div class="input-field col s12">
                        <a class="waves-effect waves-light btn-large" href="login_cliente.php">Cliente</a>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a class="waves-effect waves-light btn-large" href="login_gestor.php">Gestor</a>
                    </div>
                </div>
                <br><br>
                <a href="cadastrar-login.php">Ainda não cadastrado ? Cadastre-se no K7</a><br><br>
            </div>
        </div>
    </div>
</body>

</html>