<?php
    require_once "../validations/validacoes-cadastro.php";
    require_once "links.php";
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

    <section class="fundo-imagem" style="background-image: url('img/FotoFundoFogo.jpg'); background-size: cover; background-position: center; padding: 60px 20px; height: 100vh; position: relative;">
        <div class="cadastrar-form bg-white p-4 rounded shadow" id="cadastrar-form" style="max-width: 500px; margin: auto;">
            <h1 class="introducao mb-4 text-center">Cadastre-se</h1>
            <form id="cadastro" method="POST" action="#">
                <div class="form-group mb-3">
                    <label for="cadastro-nome">Nome completo</label>
                    <input type="text" class="form-control" id="cadastro-nome" placeholder="Seu nome completo" required>
                </div>

                <div class="form-group mb-3">
                    <label for="cadastro-email">Endereço de email</label>
                    <input type="email" class="form-control" id="cadastro-email" placeholder="Seu email" required>
                </div>

                <div class="form-group mb-3">
                    <label for="cadastro-tel">Número de telefone</label>
                    <input type="tel" class="form-control" id="cadastro-tel" placeholder="Seu telefone">
                </div>

                <div class="form-group mb-3">
                    <label for="cadastro-senha">Senha</label>
                    <input type="password" class="form-control" id="cadastro-senha" placeholder="Crie uma senha" required>
                </div>

                <div class="form-group mb-3">
                    <label for="confirma-senha">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confirma-senha" name="confirma-senha" placeholder="Confirme sua senha" required>
                </div>

                <div class="mb-2">
                    <label class="form-check-label" for="alerta-sms">Receber alertas via SMS </label>
                    <input type="checkbox" class="form-check-input" id="alerta-sms">
                </div>

                <div class="mb-2">
                    <label class="form-check-label" for="alerta-email">Receber alertas via email</label>
                    <input type="checkbox" class="form-check-input" id="alerta-email">
                </div>

                <div>
                    <p class="text-center mb-4">Já tem conta? Faça login <a href="login.php">aqui</a>!</p>
                </div>
                <div>
                    <p class="text-center mb-4">Já tem conta? Faça login <a href="login.php">aqui</a>!</p>
                </div>
                <div>
                    <p class="text-center mb-4">Já tem conta? Faça login <a href="login.php">aqui</a>!</p>
                </div>

                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </form>
        </div>
    </section>

    <footer class="footer text-center mt-5">
        <p>&copy; 2024 Fogo Zero. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>

    <!-- Validação JS -->
    <script>
        document.querySelector("form").addEventListener("submit", function(e) {
            const nome = document.getElementById("cadastro-nome").value.trim();
            const senha = document.getElementById("cadastro-senha").value;
            const confirmarSenha = document.getElementById("confirma-senha").value;

            if (nome === "") {
                alert("Por favor, preencha seu nome.");
                e.preventDefault();
            }

            if (senha.length < 6) {
                alert("A senha deve ter no mínimo 6 caracteres.");
                e.preventDefault();
            }

            if (senha !== confirmarSenha) {
                alert("As senhas não coincidem.");
                e.preventDefault();
            }
        });
    </script>
</body>
</html>
