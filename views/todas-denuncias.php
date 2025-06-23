<?php
    require_once "header.php";

    if (isset($_GET["msg"])) 
    {
        echo "<div id='msg_sucesso'>
                <h2 class='msg_sucesso'>{$_GET["msg"]}</h2>
            </div>";
    }
?>

<main class="denuncias-fundo" style="padding-bottom: 200px;">
    <div style="text-align: center; margin: 20px 0;">
        <h2 style="color: #ff9933;">Denúncias Recentes</h2>
    </div>

    <section class="todas-denuncias" id="denuncias-ativas">

        <?php 

        if ($retorno) 
        {
            $contador = 0;

            foreach ($retorno as $dados) 
            {
                    if ($contador >= 9) break;

                    $dataFormatada = date("d/m/Y H:i", strtotime($dados -> data_denuncia));
                    $caminhoImg = !empty($dados -> imagem) ? "denuncias/{$dados -> imagem}" : "denuncias/sem-imagem.png";

                    echo "<div class='denuncia-card'>
                        <div class='denuncia-div'>
                            <img src='{$caminhoImg}' alt='Imagem da denúncia' class='denuncia-img'>
                        </div>
                        <p><span><strong>ID:</strong></span> {$dados->id_denuncia}</p>
                        <p><span><strong>Descrição:</strong></span> {$dados->descricao}</p>
                        <p><span><strong>Local:</strong></span> {$dados->localizacao}</p>
                        <p><span><strong>Data:</strong></span> {$dataFormatada}</p>
                        <p><span><strong>Status:</strong></span> {$dados -> status_denuncia}</p>";

                        if (!empty($dados -> comentario)) 
                        {
                            echo "<p><span><strong>Comentário:</strong></span> {$dados -> comentario}</p>";
                        }
                        
                        if (isset($_SESSION["tipo"]) && $_SESSION["tipo"] === "Administrador")
                        {
                            echo "<br><a class='botao-status' href='index.php?controle=denunciaController&metodo=mudarStatus&{$dados->id_denuncia}'>Mudar Status</a>";
                        }
                        
                        echo "</div>";

                    $contador++;
                }
            }
        ?>
    </section>

    <?php 
        if (!$retorno)
        {
            echo "<div class='sem-denuncias'>
                    <p><strong>Nenhuma denúncia registrada.</strong></p>
                </div>";
        }
    ?>

</main>

<?php require_once "footer.php"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    function mostrar(img)
    {
        if(img.files && img.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#img')
                    .attr('src', e.target.result)
                    .width(170)
                    .height(100);
            };
            reader.readAsDataURL(img.files[0]);
        }
    }

    setTimeout(function() {
        var msg = document.getElementById("msg_sucesso");
        if (msg)
        {
            msg.style.display = "none";
        }
    }, 2000);
</script>
</body>
</html>
