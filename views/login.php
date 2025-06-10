<?php
    require_once "header.php";
    require_once "global/links.php";
?>

    <section class="login-bg">
        <div class="login-form" id="login-form">
            <h1 class="introducao text-center">Login </h1>
            <form id="login" method="post" action="index.php?controle=usuarioController&metodo=login">

                <div class="form-group mb-4">
                    <label for="login-email">Endereço de email</label>
                    <input type="email" class="form-control" name="login-email" placeholder="Digite seu email" required>
                </div>

                <div class="form-group mb-4">
                    <label for="login-senha">Senha</label>
                    <input type="password" class="form-control" name="login-senha" placeholder="Digite sua senha" required>
                </div>

                <div>
                    <p class="text-center mb-4">Não tem conta? Faça o cadastro <a href="index.php?controle=inicioController&metodo=cadastro">aqui</a>!</p>
                </div>

                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
        </div>
    </section>

    <?php require_once "footer.php"; require_once "global/scripts.php"; ?>

    </body>
</html>
