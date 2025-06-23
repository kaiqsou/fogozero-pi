<?php
    require_once "header.php";
    $msg = isset($_SESSION["mensagem"]) ? $_SESSION["mensagem"] : "";
    unset($_SESSION["mensagem"]);
?>

    <section class="login-bg">
        <div class="login-form" id="login-form">
            <h1 class="introducao text-center">Login </h1>
            <form id="login" method="post" action="index.php?controle=usuarioController&metodo=login">

                <div class="form-group mb-4">
                    <label for="login-email">Endereço de email</label>
                    <input maxlength="255" type="email" class="form-control" name="login-email" placeholder="Digite seu email" required>
                </div>

                <div class="form-group mb-4">
                    <label for="login-senha">Senha</label>
                    <input maxlength="15" type="password" class="form-control" name="login-senha" placeholder="Digite sua senha" required>
                </div>

                <div style='color:red;font-size:13px;'><?php echo $msg;?></div><br>

                <div>
                    <p class="text-center mb-4">Não tem conta? Faça o cadastro <a style="color: #ff9933; font-weight:bold;" href="index.php?controle=inicioController&metodo=cadastro">aqui</a>!</p>
                </div>

                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
        </div>
    </section>

    <?php require_once "footer.php";?>

    </body>
</html>
