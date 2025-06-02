<?php
    require_once "../validations/validacoes-cadastro.php";
    require_once "global/links.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

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
                    <!--<li><a href="quemsomos.php">Sobre Nós</a></li>-->
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="img-bg">
        <div class="cadastrar-form" id="cadastrar-form">
            <h1 class="introducao">Cadastre-se</h1>
            <form id="cadastroForm" method="POST" action="#">
                <div class="form-group">
                    <label for="cadastro-nome" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="cadastro-nome" placeholder="Seu nome completo" required>
                </div>

                <div class="form-group mb-3">
                    <label for="cadastro-email" class="form-label">Endereço de email</label>
                    <input type="email" class="form-control" id="cadastro-email" placeholder="Seu email" required>
                </div>

                <div class="form-group">
                    <label for="cadastro-tel" class="form-label">Número de telefone</label>
                    <input type="tel" class="form-control" id="cadastro-tel" placeholder="Seu telefone">
                </div>

                <div class="form-group">
                    <label for="cadastro-senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="cadastro-senha" placeholder="Crie uma senha" required>
                </div>

                <div class="form-group">
                    <label for="confirma-senha" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confirma-senha" name="confirma-senha" placeholder="Confirme sua senha" required>
                </div>

                <label class="custom-checkbox" for="alerta-sms">
                    <input type="checkbox" id="alerta-sms">
                    <span class="checkmark"></span>
                    Receber alertas via SMS 
                </label>

                <label class="custom-checkbox" for="alerta-email">
                    <input type="checkbox" id="alerta-email">
                    <span class="checkmark"></span>
                    Receber alertas via e-mail
                </label>

                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </form>
        </div>
    </section>

   <?php require_once "global/footer.php"; require_once "global/scripts.php"; ?>
    
</body>
</html>
