<?php 
phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "./partials/cabecalho.php" ?>
  <title>Locadora K7</title>
</head>

<body>

  <nav class="nav-extended blue lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li class="active"><a href="cadastrar.php">Cadastrar filme</a></li>
        <li><a href="cadastrar_funcionario.php">Cadastrar funcionário</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>Locadora K7</h1>
    </div>
  </nav>

  <div class="row">
    <form action="inserirFilme.php" method="POST">
      <div class="col s6 offset-s3">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Cadastrar Filme</span>

            <!-- input titulo-->
            <div class="row">
              <div class="input-field col s12">
                <input id="titulo" type="text" class="validate" name="titulo" required>
                <label for="titulo">Título do Filme</label>
              </div>
            </div>

            <!-- input sinopse-->
            <div class="row">
              <div class="row">
                <div class="input-field col s12">
                  <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                  <label for="sinopse">Sinopse</label>
                </div>
              </div>
            </div>

            <!-- input nota-->
            <div class="row">
              <div class="input-field col s12">
                <input id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" required>
                <label for="nota">Nota</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="preco" name="preco" type="number" step=".1" min=0 max=10 class="validate" required>
                <label for="preco">Preço do filme</label>
              </div>
            </div>
            <!-- input capa -->
            <div class="file-field input-field">
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" name="poster" id="poster" required>
                <label for="poster">link da capa do Filme</label>
              </div>
            </div>

            <div class="card-action">
              <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
              <button type="submit" class="waves-effect waves-light btn blue">Confirmar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <?php include "./partials/footer.php" ?>
</body>

</html>