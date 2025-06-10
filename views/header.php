<?php 
    if(!isset($_SESSION))
    {
        session_start();
    }
    require_once "global/links.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>FogoZero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    
</head>

<body>
    <div class="contato-queimadas">
        <p><strong>Emergência:</strong> 192</p>
        <p><strong>Telefone Raizen para casas próximas ao Canavial:</strong> 0800 728 1616</p>
    </div>
    <header class="menu-bg">
        <div class="menu">
            <div class="menu-logo">
                <a href="index.php">FogoZero</a>
            </div>
            <nav class="menu-nav">
                <ul>
                        <li>
                            <a href="index.php?controle=inicioController&metodo=inicio">Início</a>
                        </li>
                        <li>
                            <a href="index.php?controle=inicioController&metodo=educacao">Educação</a>
                        </li>
                        <li>
                            <a href="#">Relatos</a>
                        </li>
                    <?php 
                    
                    if(isset($_SESSION["nome"]))
                    {
                        echo "
                        <li>
                            <a href='index.php?controle=inicioController&metodo=denuncia'>Denuncie</a>
                        </li>
                        <li>
                            <a href='index.php?controle=usuarioController&metodo=logout'>Sair</a>
                        </li>";
                    }
                    else 
                    {
                        echo "
                        <li>
                            <a href='index.php?controle=inicioController&metodo=cadastro'>Cadastrar</a>
                        </li>
                        <li>
                            <a href='index.php?controle=usuarioController&metodo=login'>Entrar</a>
                        </li>";
                    }

                    ?>
                </ul>
            </nav>
        </div>
    </header>