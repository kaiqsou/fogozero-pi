<?php
    require_once "header.php";
    require_once "global/links.php";
?>

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

    <section class="painel-fogo">
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

    <?php require_once "footer.php"; ?>
    </body>
</html>