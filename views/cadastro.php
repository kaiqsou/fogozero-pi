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

    <section class="img-bg">
        <div class="cadastrar-form" id="cadastrar-form">
            <h1 class="introducao">Cadastre-se</h1>
            <form id="cadastroForm" method="POST" action="#">
                <div class="form-group">
                    <label for="cadastro-nome" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="cadastro-nome" placeholder="Seu nome completo" required>
                </div>

                <div class="form-group mb-3">
                    <label for="cadastro-email" class="form-label">Endereço de email</label>
                    <input type="email" class="form-control" id="cadastro-email" placeholder="Seu email" required>
                </div>

                <div class="form-group">
                    <label for="cadastro-tel" class="form-label">Número de telefone</label>
                    <input type="tel" class="form-control" id="cadastro-tel" placeholder="Seu telefone">
                </div>

                <div class="form-group">
                    <label for="cadastro-senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="cadastro-senha" placeholder="Crie uma senha" required>
                </div>

                <div class="form-group">
                    <label for="confirma-senha" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confirma-senha" name="confirma-senha" placeholder="Confirme sua senha" required>
                </div>

                <label class="custom-checkbox" for="alerta-sms">
                    <input type="checkbox" id="alerta-sms">
                    <span class="checkmark"></span>
                    Receber alertas via SMS 
                </label>

                <label class="custom-checkbox" for="alerta-email">
                    <input type="checkbox" id="alerta-email">
                    <span class="checkmark"></span>
                    Receber alertas via e-mail
                </label>

                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </form>
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
