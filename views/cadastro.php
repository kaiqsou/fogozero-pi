<?php
    require_once "global/links.php";
    require_once "header.php"
?>
    <section class="img-bg">
        <div class="cadastrar-form" id="cadastrar-form">
            <h1 class="introducao">Cadastre-se</h1>
            <form id="cadastroForm" method="POST">

                <div class="form-group">
                    <label for="cadastro-nome" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="cadastro-nome" name="cadastro-nome" placeholder="Digite o seu nome" required>
                </div>

                <div class="form-group mb-3">
                    <label for="cadastro-email" class="form-label">Endereço de email</label>
                    <input type="email" class="form-control" id="cadastro-email" name="cadastro-email" placeholder="Digite o seu email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cadastro-tel" class="form-label">Número de telefone</label>
                    <input type="tel" class="form-control" id="cadastro-tel" name="cadastro-telefone" placeholder="Digite o seu telefone">
                </div>
                <div class="form-group mb-3">
                    <label for="cadastro-senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="cadastro-senha" name="cadastro-senha" placeholder="Crie uma senha" required>
                </div>
                <div class="form-group">
                    <label for="confirma-senha" class="form-label">Confirme a senha</label>
                    <input type="password" class="form-control" id="confirma-senha" name="confirma-senha" placeholder="Confirme sua senha" required>
                </div>

                <label class="custom-checkbox" for="alerta-email">
                    <input type="checkbox" id="alerta-email" name="alerta-email" onclick="verificar(this)">
                    <span class="checkmark"></span>
                    Desejo receber alertas de incêndios próximos a mim.
                </label>

                

                <!-- Abaixo está as informações adicionais de cadastro -->

                <div class="form-group" id="endereco" style="display:none">
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
                        <input type="text" class="form-control" id="cadastro-rua" placeholder="Nome da rua"><br>

                        <div class="row">
                            <div class="col">
                                <label for="cadastro-bairro" class="form-label">Bairro</label>
                                <input type="text" class="form-control" id="cadastro-bairro" placeholder="Nome do bairro"><br>
                            </div>
                            <div class="col">
                                <label for="cadastro-numero" class="form-label">Número</label>
                                <input type="text" class="form-control" id="cadastro-numero" placeholder="Número da residência"><br>   
                            </div>
                        <div>
                    </div>
                </div>
            </div>
            </div>
                <button type="submit" class="btn btn-primary w-100" style="display:inline">Enviar</button>
            </form>
        </div>
    </section>

    <?php require_once "footer.php"; require_once "global/scripts.php"; ?>
    <script>
        function verificar(elemento)
        {
            if (elemento.checked)
            {
                document.querySelector("#endereco").style = "display:inline-block";
            }
            else 
            {
                document.querySelector("#endereco").style = "display:none";
            }
        }
    </script>

</body>
</html>
