<?php
	require_once "header.php";
?>

<main style="background:#fff8f0;">
	<div style="text-align: center; margin: 20px 0;">
        <h2 style="color: #ff9933;">Detalhes da Denúncia</h2>
    </div>

	<?php 
		$contador = 0;

		foreach ($retorno as $dados) 
        {
            $dataFormatada = date("d/m/Y H:i", strtotime($dados -> data_denuncia));
            $caminhoImg = !empty($dados -> imagem) ? "denuncias/{$dados -> imagem}" : "denuncias/sem-imagem.png";
			$endereco = explode(",", trim($dados->localizacao));
			$rua = $endereco[0] ?? "";
			$numero = $endereco[1] ?? "";
			$bairro = $endereco[2] ?? "";
			$cidade = $endereco[3] ?? "";
			$estado = $endereco[4] ?? "";

            echo "<div class='detalhes'>
            <div class='detalhes-div'>
                    <img src='{$caminhoImg}' alt='Imagem da denúncia' class='denuncia-img'>
            </div>
            <p><span><strong>Descrição:</strong></span> {$dados -> descricao}</p>
            <p><span><strong>Rua:</strong></span> {$rua}</p>
			<p><span><strong>Número:</strong></span> {$numero}</p>
			<p><span><strong>Bairro:</strong></span> {$bairro}</p>
			<p><span><strong>Cidade:</strong></span> {$cidade}</p>
			<p><span><strong>Estado:</strong></span> {$estado}</p>";

            if (!empty($dados -> comentario)) 
            {
                echo "<p><span><strong>Comentário:</strong></span> {$dados -> comentario}</p>";
            }
            echo "<p><span><strong>Data:</strong></span> {$dataFormatada}</p>
            <p><span><strong>Status:</strong></span> {$dados -> status_denuncia}</p>
			<div class='feedbacks'>
				<a href='index.php?controle=denunciaController&metodo=listarFeedbacks&id={$dados -> id_denuncia}' class='btn btn-primary'>Ver Feedbacks</a>
				<a href='' class='btn btn-primary'>Enviar Feedback</a>
			<div>
            </div>";

			
            $contador++;
		}

		
	?>
</main>
	<?php require_once "footer.php"?>
</body>
</html>