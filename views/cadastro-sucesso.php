<?php require_once "global/links.php"; ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Cadastro realizado - Fogo Zero</title>
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
                    <li><a href="../index.php">Início</a></li>
                    <li><a href="educacao.php">Educação</a></li>
                    <li><a href="denuncia.php">Denuncie</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="img-bg">
        <div class="cadastrar-form" id="cadastrar-form" style="text-align: center; padding: 50px;">
            <h1 class="introducao">Cadastro realizado com sucesso!</h1>
            <p>Obrigado por se cadastrar na plataforma <strong>Fogo Zero</strong>.</p>
            <p>Agora você já pode fazer login para acessar a plataforma.</p>
            <a href="login.php" class="btn btn-primary" style="display: inline-block; margin-top: 20px;">Ir para o Login</a>
        </div>
    </section>

    <?php require_once "global/footer.php"; ?>
    
</body>
</html>
