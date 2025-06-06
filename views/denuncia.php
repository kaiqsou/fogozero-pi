<?php
    require_once "global/links.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Denúncias - Fogo Zero</title>
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
                    <li><a href="relatos.php">Relatos</a></li>
                    <li><a href="denuncia.php">Denuncie</a></li>
                    <!--<li><a href="quemsomos.php">Sobre Nós</a></li>-->
                    <li><a href="login.php"> Login
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
        </svg>
    </a>
    </li>

                </ul>
            </nav>
        </div>
    </header>

    <section class="denuncia-bg">
        <div class="comentarios-form" id="comentarios-form">
            <h1 class="introducao">Denuncie</h1>
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="local">Local:</label>
                    <input type="text" class="form-control" id="local" name="local" required>
                </div>
                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="date" class="form-control" id="data" name="data" required>
                </div>
                <div class="form-group">
                    <label for="hora">Hora:</label>
                    <input type="time" class="form-control" id="hora" name="hora" required>
                </div>
                <div class="form-group">
                    <label for="comentario">Comentário:</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="arquivo">Anexar Arquivo:</label>
                    <input type="file" class="form-control-file" id="arquivo" name="arquivo">
                </div>
                <label class="custom-checkbox" for="denuncia-anon">
                    <input type="checkbox" id="denuncia-anon">
                    <span class="checkmark"></span>
                    Denúncia Anônima
                </label>
                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </form>
        </div>  
    </section>

    <?php require_once "global/footer.php"; require_once "global/scripts.php"; ?>
    
</body>
</html>
