<?php
    require_once "../models/Conexao.class.php";
    require_once "global/links.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relatos</title>
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
                    <!--<li><a href="#mapas">Mapa</a></li>-->
                    <li><a href="denuncia.php">Denunciar</a></li>
                    <!--<li><a href="views/quemsomos.php">Sobre Nós</a></li>-->
                    <li><a href="cadastro.php">Cadastre-se</a></li>
                    <li><a href="login.php">Login <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                      </svg></li></a>
                </ul>
            </nav>
        </div>
    </header>

    <main>
    <div>
          <section class="comentarios-lista" id="comentarios-lista">
            <h2>Denúncias</h2>
        <!-- Exemplo de comentários -->
            <div class="comentario-item">
                <p><strong>Nome:</strong> Maria da Silva</p>
                <p><strong>Comentário:</strong> Posso dar uma dica? Precisamos de extintores de incêndios em todas as escolas.<p>
            </div>
            <div class="comentario-item">
                <p><strong>Nome:</strong> João dos Santos</p>
                <p><strong>Comentário:</strong> Meu  vizinho ateou Fogo na avenida. Há muita fumaça</p>
            </div>
        <!-- Fim dos exemplos de comentários -->
        </section>
    </section>

    </div>
    </main>

    </body>
</html>