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
    <title>Cadastra-se</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                  <input id="nome" type="text" class="validate">
                  <label for="nome">Seu nome</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate">
                  <label for="password">Sua senha</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Seu Email</label>
                </div>
              </div>
              <a class="waves-effect waves-light btn grey">Cancelar</a>
              <a class="waves-effect waves-light btn">Cadastrar</a>
            </form>
          </div>
    </div>
</body>
</html>