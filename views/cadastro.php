<?php
    require_once "../validations/validacoes-cadastro.php";
    require_once "global/links.php";
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
                    <li><a href="../index.php">Início</a></li>
                    <li><a href="educacao.php">Educação</a></li>
                    <li><a href="denuncia.php">Denuncie</a></li>
                    <!--<li><a href="quemsomos.php">Sobre Nós</a></li>-->
                               <li><a href="login.php"> Login
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
        </svg></a></li>
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
                    <input type="text" class="form-control" id="cadastro-nome" placeholder="Seu nome completo" required><br>
  
                    <label for="cadastro-email" class="form-label">Endereço de email</label>
                    <input type="email" class="form-control" id="cadastro-email" placeholder="Seu email" required><br>

                    <label for="cadastro-tel" class="form-label">Número de telefone</label>
                    <input type="tel" class="form-control" id="cadastro-tel" placeholder="Seu telefone"><br>

                    <label for="cadastro-senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="cadastro-senha" placeholder="Crie uma senha" required><br>
   
                    <label for="confirma-senha" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confirma-senha" name="confirma-senha" placeholder="Confirme sua senha" required>
                </div>

                <label class="custom-checkbox" for="alerta-email">
                    <input type="checkbox" id="alerta-email">
                    <span class="checkmark"></span>
                    Desejo receber alertas de incêndios próximos a mim.
                </label>

                <button type="submit" class="btn btn-primary w-100">Enviar</button>

                <!-- Abaixo está as informações adicionais de cadastro -->

                <div class="form-group" style="display:none">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <label for="cadastro-cep" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="cadastro-cep" placeholder="Seu CEP"><br>
                            </div>
                            <div class="col">
                                <label for="cadastro-cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cadastro-cidade" placeholder="Sua cidade"><br>
                            </div>
                            <!-- É melhor a seleção de estado padrão ou como select? -->
                            <div class="col">
                                <label for="cadastro-estado" class="form-label">Estado</label>
                                <input type="text" class="form-control" id="cadastro-estado" placeholder="Seu estado"><br>
                            </div>
                        </div>

                        <label for="cadastro-rua" class="form-label">Rua</label>
                        <input type="text" class="form-control" id="cadastro-rua" placeholder="Sua rua"><br>

                        <div class="row">
                            <div class="col">
                                <label for="cadastro-bairro" class="form-label">Bairro</label>
                                <input type="text" class="form-control" id="cadastro-bairro" placeholder="Seu bairro"><br>
                            </div>
                            <div class="col">
                                <label for="cadastro-numero" class="form-label">Número</label>
                                <input type="text" class="form-control" id="cadastro-numero" placeholder="Número da residência"><br>   
                            </div>
                        <div>
                    </div>
                </div>

                <!-- Não aparece por algum motivo: <button type="submit" class="btn btn-primary w-100">Enviar</button> -->
            </form>
        </div>
    </section>

   <?php require_once "global/footer.php"; require_once "global/scripts.php"; ?>
    
</body>
</html>
