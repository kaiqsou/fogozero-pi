<?php
    require_once "global/links.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educação Ambiental - FogoZero</title>
</head>
<body>
<header class="menu-bg">
        <div class="menu">
            <div class="menu-logo">
                <a href="../index.php">FogoZero</a>
            </div>
            <nav class="menu-nav">
                <ul>
                    <li><a href="../index.php/index.php#sobre">Sobre</a></li>
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

    <!-- Hero Section -->
    <section class="hero-educacao">
        <div class="container">
            <h1>Educação Ambiental</h1>
            <p class="lead">Conheça, previna e proteja nosso meio ambiente contra queimadas e incêndios florestais</p>
            <a href="#conteudo-principal" class="btn btn-lg btn-warning">Comece a aprender</a>
        </div>
    </section>

    <!-- Conteúdo Principal -->
    <main class="container" id="conteudo-principal">
        <!-- Cards Educativos -->
        <section class="painel-fogo">
            <div class="painel-fogo-container">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="sites-item h-100">
                            <i class="fas fa-tree fa-3x mb-3" style="color: #ff6600;"></i>
                            <h2>Impactos Ambientais</h2>
                            <p>Entenda como as queimadas afetam nosso ecossistema e biodiversidade.</p>
                            <a href="#impactos" class="btn btn-outline-warning">Saiba mais</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="sites-item h-100">
                            <i class="fas fa-fire-extinguisher fa-3x mb-3" style="color: #ff6600;"></i>
                            <h2>Como Prevenir</h2>
                            <p>Aprenda medidas simples que podem evitar grandes incêndios.</p>
                            <a href="#prevencao" class="btn btn-outline-warning">Saiba mais</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="sites-item h-100">
                            <i class="fas fa-phone-alt fa-3x mb-3" style="color: #ff6600;"></i>
                            <h2>Faça sua Parte</h2>
                            <p>Saiba como denunciar queimadas ilegais e proteger nossa natureza.</p>
                            <a href="denuncia.html" class="btn btn-outline-warning">Denuncie aqui</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Impactos -->
        <section id="impactos" class="painel-fogo-itens my-5">
            <h2>Impactos Ambientais</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>As queimadas causam danos irreparáveis ao meio ambiente:</p>
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><i class="fas fa-skull-crossbones me-2"></i> Destruição da biodiversidade</li>
                        <li class="list-group-item"><i class="fas fa-cloud me-2"></i> Aumento da poluição do ar</li>
                        <li class="list-group-item"><i class="fas fa-tint me-2"></i> Alteração do ciclo hidrológico</li>
                        <li class="list-group-item"><i class="fas fa-temperature-high me-2"></i> Contribuição para o aquecimento global</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="../img/impactoqueimadas.jpg" alt="Impacto das queimadas na floresta" class="img-fluid rounded">
                </div>
            </div>
        </section>

        <!-- Seção de Prevenção -->
        <section id="prevencao" class="painel-fogo-itens my-5 bg-light p-4 rounded">
            <h2>Como Prevenir Queimadas</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="../img/prevencao-queimadas.jpg" alt="Técnicas de prevenção de queimadas" class="img-fluid rounded mb-3">
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionPrevencao">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <i class="fas fa-ban me-2"></i> O que NÃO fazer
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionPrevencao">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Não queime lixo ou restos de poda</li>
                                        <li>Não solte balões</li>
                                        <li>Não faça fogueiras em áreas de vegetação</li>
                                        <li>Não jogue bitucas de cigarro acesas</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    <i class="fas fa-check-circle me-2"></i> Boas práticas
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionPrevencao">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Mantenha terrenos limpos e capinados</li>
                                        <li>Tenha sempre água e ferramentas à mão</li>
                                        <li>Oriente vizinhos sobre os perigos</li>
                                        <li>Denuncie atividades suspeitas</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dicas do Corpo de Bombeiros -->
        <section class="painel-fogo-itens my-5">
            <h2>Dicas do Corpo de Bombeiros</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-fire-extinguisher me-3 text-warning"></i>
                            Evite queimadas desnecessárias: Não queime lixo ou limpe terrenos com fogo.
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-smoking-ban me-3 text-warning"></i>
                            Descarte cigarros corretamente: Uma bituca pode iniciar um grande incêndio.
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-campfire me-3 text-warning"></i>
                            Não faça fogueiras em áreas proibidas: Sempre apague completamente o fogo após o uso.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-phone-alt me-3 text-warning"></i>
                            Denuncie atividades suspeitas: Ligue para o 193 se presenciar queimadas ilegais.
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-tools me-3 text-warning"></i>
                            Prepare-se para emergências: Tenha água e ferramentas para combater pequenos focos de incêndio.
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-exclamation-triangle me-3 text-warning"></i>
                            Em caso de incêndio, proteja-se primeiro e depois acione os bombeiros.
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Vídeos Educativos -->
        <section class="painel-fogo-itens my-5">
            <h2>Vídeos Educativos</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/W8o2-2czhgk" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Prevenção de Incêndios Florestais</h5>
                            <p class="card-text">Dicas do Corpo de Bombeiros para evitar queimadas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/TB_8MsWVk1w" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Impacto das Queimadas</h5>
                            <p class="card-text">Como o fogo afeta nosso ecossistema.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/9WS67C7MKeE" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Como Agir em Caso de Incêndio</h5>
                            <p class="card-text">Procedimentos de emergência.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
                                    
    <?php require_once "global/footer.php"; require_once "global/scripts.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
