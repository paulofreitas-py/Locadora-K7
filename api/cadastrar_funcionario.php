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
    <title>Cadastrar Funcionario</title>
</head>

<body>
    <nav class="nav-extended blue lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar filme</a></li>
                <li class="active"><a href="cadastrar_funcionario.php">Cadastrar funcionário</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Locadora K7</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent blue darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Alugados</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nome" type="text" class="validate">
                        <label for="nome">Nome completo do funcionario</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email do funcionário</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="input-field inline">
                            <input id="rg" type="number" class="validate">
                            <label for="rg">RG do funcionário</label>

                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="input-field inline">
                            <input id="cpf" type="number" class="validate">
                            <label for="cpf">CPF do funcionário</label>

                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="input-field inline">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email do funcionário</label>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="input-field inline">
                            <input id="telefone" type="tel" class="validate">
                            <label for="telefone">Telefone do funcionário</label>

                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="input-field inline">
                            <input id="cel1" type="tel" class="validate">
                            <label for="cel1">celular do funcionário</label>

                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="input-field inline">
                            <input id="cel2" type="tel" class="validate">
                            <label for="cel2">celular do funcionário</label>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="input-field inline">
                            <input id="endereco" type="text" class="validate">
                            <label for="endereco">Endereço do funcionário</label>

                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="input-field inline">
                            <input id="municipio" type="tel" class="validate">
                            <label for="municipio">Município do funcionário</label>

                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="input-field inline">
                            <input id="estado" type="text" class="validate">
                            <label for="estado">Estado do funcionário</label>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-action">
                        <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
                        <a href="galeria.php" class="waves-effect waves-light btn blue">Confirmar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include "./partials/footer.php" ?>
</body>

</html>