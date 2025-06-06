<?php
    require_once "global/links.php";
    require_once "global/scripts.php";
    require_once "global/footer.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Receba Alerta - Fogo Zero</title>
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
                    <li><a href="educacao.html">Educação</a></li>
                    <li><a href="index.html#mapas">Mapas</a></li>
                    <li><a href="recebaalerta.html">Receba Alerta</a></li>
                    <li><a href="denuncia.html">Denuncie</a></li>
                    <li><a href="quemsomos.html">Sobre Nós</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="fundo-imagem" style="background-image: url('img/FotoFundoFogo.jpg'); background-size: cover; background-position: center; padding: 60px 20px; height: 100vh; position: relative;">
        <div class="cadastrar-form" id="cadastrar-form">
            <h1 class="introducao">Receba Alertas de Emergências</h1>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputTelefone">Número de telefone</label>
                    <input type="tel" class="form-control" id="exampleInputTelefone" placeholder="Seu telefone">
                </div>
                <div class="form-group">
                    <label for="exampleInputLocalizacao">Sua localização (opcional)</label>
                    <input type="text" class="form-control" id="exampleInputLocalizacao" placeholder="Sua localização">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Receber alertas via SMS</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                    <label class="form-check-label" for="exampleCheck2">Receber alertas via email</label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Fogo Zero. Todos os direitos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
