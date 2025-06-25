<?php
	require_once "header.php";
?>

<main style="background:#fff8f0;">
    <div style="text-align: center; margin: 20px 0;">
        <h2 style="color: #ff9933;">Todos os Feedbacks</h2>
    </div>

    <section class="todos-feedbacks">

    <?php
    if(is_array($feedbacks) && count($feedbacks) > 0)
    {
        $caminhoImg = !empty($dados -> imagem) ? "denuncias/{$dados -> imagem}" : null;

        foreach($feedbacks as $dados)
        {
            echo "<div class='feedback-card'>";
            echo "<p><strong>Usuário:</strong> {$user[0]->nome}</p>";
            echo "<p><strong>Comentário:</strong> {$dados->comentario}</p>";
            echo "<p><strong>Data:</strong> " . date("d/m/Y H:i", strtotime($dados->data_feedback)) . "</p>";
            if ($caminhoImg != null)
            {

                echo "<div class='denuncia-div'>
                        <img src='{$caminhoImg}' alt='Imagem da denúncia' class='denuncia-img'>
                    </div>";
            }
            echo "</div>";
        }
    }
    else
    {
        echo "<p class='sem-feedbacks'>Nenhum feedback encontrado.</p>";
    }
    ?>

    </section>
</main>

<?php require_once "footer.php" ?>