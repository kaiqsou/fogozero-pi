<?php

if(!isset($_SESSION))
{
	session_start();
}

require_once "global/links.php";

if (isset($_SESSION["id"]))
{
    require_once "header.php";

    if (!isset($_SESSION)) 
    {
        session_start();
    }

    $descricao = "";
    $localizacao = "";
    $comentario = "";   

    if ($_POST) 
    {
        if (!empty($_POST['descricao'])) {
            $descricao = $_POST['descricao'];
        }
        if (!empty($_POST['localizacao'])) {
            $localizacao = $_POST['localizacao'];
        }
        if (!empty($_POST['comentario'])) {
            $comentario = $_POST['comentario'];
        }
    }
?>

<main>
    <section class='denuncia-bg'>
        <div class='denuncia-form' id='comentarios-form'>
            <h1 class='introducao'>Denuncie</h1>
            <form action='index.php?controle=denunciaController&metodo=inserir' method='POST' enctype='multipart/form-data'>
                <div class='form-group'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col'>
                                <label for='descricao'>Descrição:</label>
                                <input type='text' class='form-control' id='descricao' name='descricao' placeholder='Digite uma descrição' value='<?php echo $descricao; ?>'>
                                <div style='color:red;font-size:16px;'><?php echo $msg[0] != '' ? $msg[0] : ''; ?></div>
                            </div>
                            <div class='col'>
                                <label for='local'>Local:</label>
                                <input type='text' class='form-control' id='localizacao' name='localizacao' placeholder='Digite a localização' value='<?php echo $localizacao; ?>'>
                                <div style='color:red;font-size:16px;'><?php echo $msg[1] != '' ? $msg[1] : ''; ?></div>
                            </div>
                        </div><br>

                        <label for='comentario'>Comentário:</label>
                        <textarea class='form-control' id='comentario' name='comentario' rows='7'><?php echo $comentario; ?></textarea><br>

                        <label for='imagem'>Anexar Imagem:</label>
                        <input type='file' class='form-control-file' id='imagem' name='imagem' onchange='mostrar(this)' accept='image/png, image/jpeg'>
                        <div style='color:red;font-size:16px;'><?php echo $msg[2] != '' ? $msg[2] : ''; ?></div>

                        <input type='submit' class='btn btn-primary w-100' value='Enviar'>
                    </div>
                </div>
            </form>
        </div>  
    </section>
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
