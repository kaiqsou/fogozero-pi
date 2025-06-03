<?php
    require_once "views/global/links.php";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <title>Fogo Zero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contato-queimadas">
        <p><strong>Emergência:</strong> 192</p>
        <p><strong>Telefone Raizen para casas próximas ao Canavial:</strong> 0800 728 1616</p>
    </div>

    <header class="menu-bg">
        <div class="menu">
            <div class="menu-logo">
                <a href="index.php">FogoZero</a>
            </div>
            <nav class="menu-nav">
                <ul>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="views/educacao.php">Educação</a></li>
                    <!--<li><a href="#mapas">Mapa</a></li>-->
                    <li><a href="views/denuncia.php">Denuncie</a></li>
                    <!--<li><a href="views/quemsomos.php">Sobre Nós</a></li>-->
                    <li><a href="views/cadastro.php">Cadastre-se</a></li>
                    <li><a href="views/login.php">Login <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                      </svg></li></a>
                </ul>
            </nav>
        </div>
    </header>

    <h1 class="introducao">
        As queimadas são incêndios que podem ser causadas por ações humanas ou naturais e suas consequências são devastadoras para o meio ambiente.
    </h1>

    <section class="sobre" id="sobre">
        <div class="sobre-info">
            <h1>Sobre</h1>
            <p>
                As queimadas, com suas proporções devastadoras, têm impactado severamente nosso país.
                Este site foi desenvolvido para oferecer suporte aos moradores e agricultores das regiões afetadas,
                permitindo que se antecipem às ocorrências e tomem medidas preventivas e corretivas para minimizar os danos.
            </p>
            <p>
                Focamos no monitoramento, prevenção e educação sobre queimadas, temas extremamente relevantes diante das mudanças climáticas
                e eventos ambientais extremos. Esta iniciativa visa conscientizar o público e proporcionar uma resposta rápida a incidentes,
                contribuindo para a proteção do nosso ambiente.
            </p>
        </div>
        <div class="sobre-img">
            <img src="img/sobre1.jpg" alt="sobre-1">
        </div>
        <div class="sobre-img">
            <img src="img/sobre2.jpg" alt="sobre-2">
        </div>
    </section>

    <section class="painel-fogo" id="mapas">
        <div class="painel-fogo-container">
            <div class="painel-fogo-itens">
                <h2>Passe o mouse e navegue.</h2>
                <p>
                    Utilize o mapa interativo "Painel do Fogo" para monitorar queimadas em tempo real.
                    Você pode ampliar, reduzir e clicar nas áreas de interesse para obter mais informações detalhadas sobre os focos de incêndio.
                </p>
                <div class="iframe-container">
                    <iframe
                        height="800"
                        src="https://panorama.sipam.gov.br/painel-do-fogo/"
                        style="border-width: 0px"
                        width="900"
                        frameborder="0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="sites" id="sites">
        <div class="sites-container">
            <div class="sites-item">
                <a href="http://queimadas.dgi.inpe.br/queimadas/bdqueimadas/" target="_blank">Queimadas - INPE</a>
            </div>
            <div class="sites-item">
                <a href="https://www.windy.com/-Temperature-temp?temp,-23.628,-46.641,5" target="_blank">Windy - Temperature</a>
            </div>
        </div>
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
