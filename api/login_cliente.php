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
    <title>Login cliente</title>
</head>

<body class="blue">
    <div class="container center-align">
        <div class="row blue lighten-3">
            <div class="col s12 m6 offset-m3">
                <h1 class="white-text">Login</h1>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="card-action">
                        <a class="btn waves-effect waves-light grey" href="index.php">Cancelar</a>
                        <a href="galeria.php" class="waves-effect waves-light btn blue">Confirmar</a>
                    </div>
                </div>
                <a href="cadastrar-login.php">Ainda não cadastrado ? Cadastre-se no K7</a><br><br>
            </div>
        </div>
    </div>
</body>

</html>