<?php
    require_once "header.php";
    require_once "validations/validacoes-cadastro.php";

?>
    <section class="img-bg">
        <div class="cadastrar-form" id="cadastrar-form">
            <h1 class="introducao">Cadastre-se</h1>
            <form id="cadastroForm" method="POST" action="index.php?controle=usuarioController&metodo=cadastro">

                <div class="form-group">
                    <label for="cadastro-nome" class="form-label">Nome completo</label>
                    <input maxlength="100" type="text" class="form-control" id="cadastro-nome" name="cadastro-nome" placeholder="Digite o seu nome" value="<?php echo $nome; ?>">   
                    <div style='color:red;font-size:12px;'><?php echo $msg[0];?></div>
                </div>

                <div class="form-group mb-3">
                    <label for="cadastro-email" class="form-label">Endereço de email</label>
                    <input maxlength="255" type="email" class="form-control" id="cadastro-email" name="cadastro-email" placeholder="Digite o seu email" value="<?php echo $email; ?>">
                    <div style='color:red;font-size:12px;'><?php echo $msg[1];?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="cadastro-tel" class="form-label">Número de telefone</label>
                    <input maxlength="14" type="tel" class="form-control" id="cadastro-tel" name="cadastro-telefone" placeholder="Digite o seu telefone" value="<?php echo $telefone; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="cadastro-senha" class="form-label">Senha</label>
                    <input minlength="3" maxlength="15" type="password" class="form-control" id="cadastro-senha" name="cadastro-senha" placeholder="Crie uma senha">
                    <div style='color:red;font-size:12px;'><?php echo $msg[2];?></div>
                </div>
                <div class="form-group">
                    <label for="confirma-senha" class="form-label">Confirme a senha</label>
                    <input minlength="3" maxlength="15" type="password" class="form-control" id="confirma-senha" name="confirma-senha" placeholder="Confirme sua senha">
                    <div style='color:red;font-size:12px;'><?php echo $msg[3];?></div>
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
                                <input maxlength="10" type="text" class="form-control" name="cadastro-cep" id="cadastro-cep" placeholder="Seu CEP" value="<?php echo $cep; ?>"><br>
                            </div>
                            <div class="col">
                                <label for="cadastro-cidade" class="form-label">Cidade</label>
                                <input maxlength="100" type="text" class="form-control" name="cadastro-cidade" id="cadastro-cidade" placeholder="Sua cidade" value="<?php echo $cidade; ?>"><br>
                            </div>
                            <!-- É melhor a seleção de estado padrão ou como select? -->
                            <div class="col">
                                <label for="cadastro-estado" class="form-label">Estado</label>
                                <input maxlength="50" type="text" class="form-control" name="cadastro-estado" id="cadastro-estado" placeholder="Seu estado" value="<?php echo $estado; ?>"><br>
                            </div>
                        </div>

                        <label for="cadastro-rua" class="form-label">Rua</label>
                        <input maxlength="100" type="text" class="form-control" name="cadastro-rua" id="cadastro-rua" placeholder="Nome da rua" value="<?php echo $rua; ?>"><br>

                        <div class="row">
                            <div class="col">
                                <label for="cadastro-bairro" class="form-label">Bairro</label>
                                <input type="text" class="form-control" name="cadastro-bairro" id="cadastro-bairro" placeholder="Nome do bairro" value="<?php echo $bairro; ?>"><br>
                            </div>
                            <div class="col">
                                <label for="cadastro-numero" class="form-label">Número</label>
                                <input maxlength="15" type="text" class="form-control" name="cadastro-numero" id="cadastro-numero" placeholder="Número da residência" value="<?php echo $numero; ?>"><br>   
                            </div>
                        <div>
                    </div>
                </div>
            </div>
            </div>
            <div>
                <br><p class="text-center mb-4">Já posui uma conta? Entre <a style="color: #ff9933; font-weight:bold;" href="index.php?controle=inicioController&metodo=login">aqui</a>!</p>
            </div>
                <button type="submit" class="btn btn-primary w-100" style="display:inline">Enviar</button>
            </form>
        </div>
    </section>

    <?php require_once "footer.php";?>
    <script>
        function verificar(elemento)
        {
            if (elemento.checked)
            {
                // fazer os campos de endereço se tornarem obrigatorios caso a checkbox esteja marcada? fazer a checkbox se manter marcada caso haja POST?
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
