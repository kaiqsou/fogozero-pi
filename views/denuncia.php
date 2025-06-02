<?php
    require_once "links.php";
?>

<!DOCTYPE html>
<html lang="pt">

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
                    <li><a href="../index.php">Sobre</a></li>
                    <li><a href="educacao.php">Educação</a></li>
                    <li><a href="../index.php#mapas">Mapas</a></li>
                    <li><a href="denuncia.php">Denuncie</a></li>
                    <!--<li><a href="quemsomos.php">Sobre Nós</a></li>-->
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="fundo-imagem" style="background-image: url('img/FotoFundoFogo.jpg'); background-size: cover; background-position: center; padding: 60px 20px; min-height: calc(100vh - 100px); position: relative;">
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

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>FogoZero</h5>
                    <p>Iniciativa de educação ambiental para prevenção de queimadas e incêndios florestais.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Links Úteis</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.gov.br/ibama" target="_blank">IBAMA</a></li>
                        <li><a href="https://www.gov.br/mma" target="_blank">Ministério do Meio Ambiente</a></li>
                        <li><a href="https://www.bombeiros.rs.gov.br" target="_blank">Corpo de Bombeiros</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Redes Sociais</h5>
                    <div class="social-links">
                        <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <p class="text-center mb-0">&copy; 2025 FogoZero - Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
