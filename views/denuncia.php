<?php
    require_once "header.php";

    if(!isset($_SESSION))
    {
        session_start();
    }
?>

<?php 

    if(isset($_SESSION["nome"]))
    {
        echo "
        <main>
        <section class='denuncia-bg'>
            <div class='denuncia-form' id='comentarios-form'>
                <h1 class='introducao'>Denuncie</h1>
                <form action='index.php?controle=denunciaController&metodo=inserir' method='POST'>
                    <div class='form-group'>

                        <div class='container'>
                        <div class='row'>
                            <div class='col'>
                                <label for='nome'>Descrição:</label>
                                <input type='text' class='form-control' id='descricao' name='descricao' placeholder='Descreva a denúncia'><br>
                                <div style='color:red;font-size:12px;'><?php echo $msg[0];?></div>
                            </div>
                            <div class='col'>
                                <label for='local'>Local:</label>
                                <input type='text' class='form-control' id='localizacao' name='localizacao' placeholder='Digite a localização'>
                                <div style='color:red;font-size:12px;'><?php echo $msg[1];?></div>
                            </div>
                        </div><br>

                        <div class='container'>
                        <div class='row'>

                        </div><br>

                        <label for='comentario'>Comentário:</label>
                        <textarea class='form-control' id='comentario' name='comentario' rows='4'></textarea><br>
                    </div>

                    <label for='arquivo'>Anexar Arquivo:</label>
                    <input type='file' class='form-control-file' id='arquivo' name='arquivo'>

                    <input type='submit' class='btn btn-primary w-100' value='Enviar'>
                </form>
            </div>  
        </section>
        </main>";

    }
    else 
    {
        // ver que erro que está dando aqui
        echo "<h1>Permissões negadas.</h1>";    
        echo "<a href='../index.php?controle=inicioController&metodo=inicio'>Voltar</a>";
    }
    
    require_once "footer.php";
?>

</body>
</html>