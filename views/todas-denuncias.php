<?php
    require_once "header.php";
    require_once "global/links.php";

    if (isset($_GET["msg"])) {
        echo "<h3>{$_GET["msg"]}</h3>";
    }
?>

<main>
    <div style="text-align: center; margin: 20px 0;">
        <h2 style="color: #cc6600;">Relatos de Denúncias</h2>
    </div>

    <section class="comentarios-lista" id="comentarios-lista">
        <?php 
        if (isset($retorno) && !empty($retorno)) {
            foreach ($retorno as $dado) {
                $dataFormatada = date("d/m/Y H:i", strtotime($dado->data_denuncia));

                echo "<div class='comentario-item'>
                        <p><strong>ID:</strong> {$dado->id_denuncia}</p>
                        <p><strong>Descrição:</strong> {$dado->descricao}</p>
                        <p><strong>Local:</strong> {$dado->localizacao}</p>
                        <p><strong>Data:</strong> {$dataFormatada}</p>
                        <p><strong>Comentário:</strong> {$dado->comentario}</p>
                      </div>";
            }
        } else {
            echo "<div class='comentario-item'>
                    <p><strong>Nenhuma denúncia registrada.</strong></p>
                  </div>";
        }
        ?>
    </section>
</main>

<?php 
    require_once "footer.php"; 
    require_once "global/scripts.php"; 
?>
</body>
</html>
