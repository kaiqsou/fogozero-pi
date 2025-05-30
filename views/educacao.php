<?php
    require_once "links.php";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <title>Educação - FogoZero</title>
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
                    <!--<li><a href="../index.php#quemsomos">Sobre Nós</a></li>-->
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <h1 class="introducao"></h1>
    <div class="educacao-container">
        <section class="educacao-intro" id="educacao-intro">
            <div class="intro-container">
                <div class="intro-text">
                    <h2>Bem-vindo ao Fogo Zero</h2>
                    <p>Aqui no Fogo Zero, nossa missão é capacitar você com o conhecimento necessário para entender e combater as queimadas.</p>
                    <p>Como a Educação ambiental pode contribuir no combate às queimadas?</p>
                </div>
            </div>
            <p>Nosso país é formado por um mosaico de biomas com uma grande diversidade de fauna e flora. Florestas e matas são responsáveis pela conservação da água e pela manutenção do clima, fatores indispensáveis à existência de vida no planeta. Infelizmente a biodiversidade do Brasil é ameaçada por queimadas de pequenas e grandes proporções que comprometem e destroem definitivamente as espécies da fauna que tem papel importantíssimo no ecossistema, além de causar problemas respiratórios aos seres humanos e emissão de gases poluentes, dentre outros.</p>
        </section>
        <section class="educacao-incendios" id="educacao-incendios">
            <h2>As queimadas possuem origem humana e os incêndios podem ocorrer de forma natural ou humana.</h2>
            <p>Para evitar equívocos, é importante diferenciar os conceitos sobre queimadas e incêndios para tratarmos deste assunto. As queimadas possuem origem humana e os incêndios podem ocorrer de forma natural ou humana. O ser humano é o responsável por grande parte das queimas, seja ateando fogo em locais impróprios por vandalismo, em lixos ou folhas secas nos quintais ou até mesmo na mata com bitucas de cigarro. Essas ações causadas pelo ser humano são consideradas crimes ambientais quando executadas sem as devidas técnicas de controle e estão previstas na Lei Federal Nº. 9.605/98. Neste último caso, na maior parte das vezes, essas ações fogem do controle e se alastram causando um estrago enorme.</p>
        </section>
    </div>
    <section class="educacao-bombeiros" id="educacao-bombeiros">
        <h2>Orientações fornecidas pelo Corpo de Bombeiros à população:</h2>
        <div class="bombeiros-conteudo">
            <ul>
                <li>Evite queimadas desnecessárias: Nunca provoque queimadas para eliminar lixo ou limpar terrenos.</li>
                <li>Busque alternativas mais seguras e sustentáveis para a eliminação de resíduos.</li>
                <li>Não jogue pontas de cigarro em áreas naturais: Descarte adequadamente as pontas de cigarro em lixeiras apropriadas. Um simples cigarro pode ser suficiente para iniciar um incêndio em áreas secas.</li>
                <li>Não faça fogueiras em locais não autorizados: Caso esteja acampando ou em áreas de lazer onde a fogueira seja permitida, sempre faça em locais autorizados e tome cuidado para apagá-las completamente após o uso.</li>
                <li>Denuncie ações suspeitas: Se você notar alguém realizando queimadas ilegais ou de forma irresponsável, denuncie às autoridades ambientais ou ao Corpo de Bombeiros (193).</li>
                <li>Esteja preparado para agir em caso de incêndios: Mantenha água, abafadores e ferramentas adequadas para combate a incêndios em casa, no carro e em propriedades rurais. Essa preparação pode ser crucial para evitar que pequenos focos se alastrem.</li>
                <li>Informe-se sobre as condições climáticas: Evite fazer atividades ao ar livre, como churrascos e trilhas, em dias de altas temperaturas, baixa umidade e ventos fortes, pois essas condições favorecem a propagação rápida do fogo.</li>
            </ul>
            <br>
            <div class="bombeiros-videos">
                <iframe width="280" height="158" src="https://www.youtube.com/embed/W8o2-2czhgk" frameborder="0" allowfullscreen></iframe>
                <iframe width="280" height="158" src="https://www.youtube.com/embed/TB_8MsWVk1w" frameborder="0" allowfullscreen></iframe>
                <iframe width="280" height="158" src="https://www.youtube.com/embed/9WS67C7MKeE" frameborder="0" allowfullscreen></iframe>
                <iframe width="280" height="158" src="https://www.youtube.com/embed/IoQh2M6Q6ZE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <div><br><br><br></div>
    <footer class="footer">
        <p>&copy; 2024 Todos os direitos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
