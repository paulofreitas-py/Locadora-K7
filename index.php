<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./partials/cabecalho.php" ?>
    <title>Login</title>
</head>

<body class="blue blue">
    <div class="container center-align">
        <div class="row blue lighten-3">
            <div class="col s12 m6 offset-m3">
                <h1 class="white-text">Login</h1>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate white-text">
                        <label class="white-text" for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate white-text">
                        <label class="white-text" for="password">Password</label>
                    </div>
                </div>
                <a class="waves-effect waves-light btn" href="galeria.php">Entrar</a>
                <br><br>
                <a href="cadastrar-login.php">Ainda não cadastrado ? Cadastre-se no K7</a><br><br>
            </div>
        </div>
    </div>
</body>

</html>