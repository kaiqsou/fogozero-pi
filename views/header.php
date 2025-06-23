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
    <header class="menu-bg">
        <div class="nav-bar">
            <div class="contato-queimadas">
                <p><strong>Emergência:</strong> 192</p>
                <p><strong>Telefone Raizen para casas próximas ao Canavial:</strong> 0800 728 1616</p>
            </div>
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
                            <?php
                            if (!isset($_SESSION["tipo"]) || $_SESSION["tipo"] === "Comum")
                            {
                            echo "<li>
                                    <a href='index.php?controle=denunciaController&metodo=listarDenunciasAtivas'>Últimas Denúncias</a>
                                </li>";
                            } ?>
                            <li>
                                <a href="index.php?controle=inicioController&metodo=quemsomos">Quem Somos</a>
                            </li>
                        <?php 
                        
                        if(isset($_SESSION["id"]))
                        {
                            $nome = $_SESSION["nome"];
                            $primeiroNome = explode(" ", trim($nome))[0];

                            if (isset($_SESSION["tipo"]) && $_SESSION["tipo"] === "Administrador")
                            {
                            echo "
                                <li>
                                    <a class='botao-header' href='index.php?controle=denunciaController&metodo=listarTodas'>Gerenciar Denúncias</a>
                                </li>";
                            }

                            echo "
                            <li>
                                <a class='botao-header' href='index.php?controle=denunciaController&metodo=inicio'>Denuncie</a>
                            </li>

                            <li>
                                <p>Olá, <strong>{$primeiroNome}</strong>!</p>
                            </li>

                            <li>
                                <a class='botao-header' href='index.php?controle=usuarioController&metodo=logout'>Sair</a>
                            </li>";
                        }
                        else 
                        {
                            echo "
                            <li>
                                <a class='botao-header' href='index.php?controle=inicioController&metodo=cadastro'>Cadastrar</a>
                            </li>
                            <li>
                                <a class='botao-header' href='index.php?controle=usuarioController&metodo=login'>Entrar</a>
                            </li>";
                        }

                        ?>
                    </ul>
                </nav>
            </div>
        </div>
        
    </header>