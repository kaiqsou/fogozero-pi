<?php
    require_once "global/links.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <title>Cadastre-se - Fogo Zero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <header class="menu-bg">
        <div class="menu">
            <div class="menu-logo">
                <a href="../index.php">FogoZero</a>
            </div>
            <nav class="menu-nav">
                <ul>
                    <li><a href="../index.php#sobre">Sobre</a></li>
                    <li><a href="educacao.php">Educação</a></li>
                    <li><a href="../index.php#mapas">Mapas</a></li>
                    <li><a href="denuncia.php">Denuncie</a></li>
                    <!-- <li><a href="quemsomos.php">Sobre Nós</a></li> -->
                    <li><a href="cadastro.php">Cadastre-se</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="login-bg">
        <div class="login-form" id="login-form">
            <h1 class="introducao mb-4 text-center">Login</h1>
            <form id="login">

                <div class="form-group mb-4">
                    <label for="login-email">Endereço de email</label>
                    <input type="email" class="form-control" id="login-email" placeholder="Digite seu email" required>
                </div>

                <div class="form-group mb-4">
                    <label for="login-senha">Senha</label>
                    <input type="password" class="form-control" id="login-senha" placeholder="Digite sua senha" required>
                </div>

                <div>
                    <p class="text-center mb-4">Não tem conta? Faça o cadastro <a href="cadastro.php">aqui</a>!</p>
                </div>

                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </form>
        </div>
    </section>

    <?php require_once "global/footer.php"; require_once "global/scripts.php"; ?>

</body>
</html>
