<?php
    require_once "header.php";
?>

    <section class="denuncia-bg">
        <div class="comentarios-form" id="comentarios-form">
            <h1 class="introducao">Denuncie</h1>
            <form enctype="multipart/form-data">
                <div class="form-group">

                    <div class="container">
                    <div class="row">
                        <div class="col">
                            <label for="nome">Descrição:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Descreva a denúncia" required><br>
                        </div>
                        <div class="col">
                            <label for="local">Local:</label>
                            <input type="text" class="form-control" id="local" name="local" placeholder="Digite a localização" required>
                        </div>
                    </div><br>

                    <div class="container">
                    <div class="row">

                        <div class="col">
                            <label for="data">Data:</label>
                            <input type="date" class="form-control" id="data" name="data" required>
                        </div>
                        <div class="col">
                            <label for="hora">Hora:</label>
                            <input type="time" class="form-control" id="hora" name="hora" required>
                        </div>
                    </div><br>

                    <label for="comentario">Comentário:</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea><br>
                </div>

                <label for="arquivo">Anexar Arquivo:</label>
                <input type="file" class="form-control-file" id="arquivo" name="arquivo">
                <button type="submit" class="btn btn-primary w-100">Enviar</button>
            </form>
        </div>  
    </section>

    <?php require_once "footer.php"; require_once "global/scripts.php"; ?>
    
</body>
</html>
