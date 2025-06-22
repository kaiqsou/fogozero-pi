<?php

if(!isset($_SESSION))
{
	session_start();
}

require_once "global/links.php";

if (isset($_SESSION["tipo"]) && $_SESSION["tipo"] === "Administrador")
{
    require_once "header.php";
    
?>

<main class="denuncias-fundo" style="padding-bottom: 200px;">
    <div style="text-align: center; margin: 20px 0;">
        <h2 style="color: #ff9933;">Todas as Denúncias</h2>
    </div>

    <section class="todas-denuncias" id="todas-denuncias">

        <?php 
        $temAtivos = false;
        
        if ($retorno) 
        {
            $contador = 0;
            $temAtivos = true;

            foreach ($retorno as $dados) 
            {
                $dataFormatada = date("d/m/Y H:i", strtotime($dados -> data_denuncia));
                $caminhoImg = !empty($dados -> imagem) ? "denuncias/{$dados -> imagem}" : "denuncias/sem-imagem.png";

                if ($dados -> status_denuncia === 'Ativo') 
                {
                    //if ($contador >= 9) break;

                    echo "<div class='denuncia-card'>
                        <div class='denuncia-div'>
                            <img src='{$caminhoImg}' alt='Imagem da denúncia' class='denuncia-img'>
                        </div>
                        <p><span><strong>ID:</strong></span> {$dados -> id_denuncia}</p>
                        <p><span><strong>Descrição:</strong></span> {$dados -> descricao}</p>
                        <p><span><strong>Local:</strong></span> {$dados -> localizacao}</p>
                        <p><span><strong>Data:</strong></span> {$dataFormatada}</p>
                        <p style='color:LimeGreen;'><span><strong>Status:</strong></span> <strong>{$dados -> status_denuncia}</strong></p>";

                        if (!empty($dados -> comentario)) 
                        {
                            echo "<p><span><strong>Comentário:</strong></span> {$dados -> comentario}</p>";
                        }
                        
                        echo "<br><a class='botao-status' href='index.php?controle=denunciaController&metodo=alterar_status&id={$dados->id_denuncia}&status=Inativo'>Mudar Status</a>
                        </div>";

                    $contador++;
                }

                if ($dados -> status_denuncia === 'Inativo') 
                {
                    //if ($contador >= 9) break;

                    echo "<div class='denuncia-card'>
                        <div class='denuncia-div'>
                            <img src='{$caminhoImg}' alt='Imagem da denúncia' class='denuncia-img'>
                        </div>
                        <p><span><strong>ID:</strong></span> {$dados -> id_denuncia}</p>
                        <p><span><strong>Descrição:</strong></span> {$dados -> descricao}</p>
                        <p><span><strong>Local:</strong></span> {$dados -> localizacao}</p>
                        <p><span><strong>Data:</strong></span> {$dataFormatada}</p>
                        <p style='color:crimson;'><span><strong>Status:</strong></span> <strong>{$dados -> status_denuncia}</strong></p>";

                        if (!empty($dados -> comentario)) 
                        {
                            echo "<p><span><strong>Comentário:</strong></span> {$dados -> comentario}</p>";
                        }
                        
                        echo "<br><a class='botao-status' href='index.php?controle=denunciaController&metodo=alterar_status&id={$dados->id_denuncia}&status=Ativo'>Mudar Status</a>

                        </div>";

                    $contador++;
                }
            }
        }
        ?>
    </section>
    
<?php
    if (!$temAtivos)
    {
        echo "<div class='sem-denuncias'>
                <p><strong>Nenhuma denúncia registrada.</strong></p>
            </div>";
    }
?>

</main>

<?php 
    require_once "footer.php";
}
else 
{
    echo "<div class='permissoes-negadas'>";
    echo "<h1>Permissões negadas.</h1><br><br>";    
    echo "<a class='btn btn-warning text-white fw-bold px-4 py-2' href='../index.php?controle=inicioController&metodo=inicio'>Voltar</a>";
    echo "</div>";
}
?>

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
