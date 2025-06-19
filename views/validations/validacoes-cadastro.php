<?php

    $nome = "";
    $email = "";
    $telefone = "";
    $cep = "";
    $cidade = "";
    $estado = "";
    $rua = "";
    $bairro = "";
    $numero = "";

    if ($_POST) 
    {
        if (!empty($_POST['cadastro-nome'])) 
        {
            $nome = $_POST['cadastro-nome'];
        }

        if (!empty($_POST['cadastro-email'])) 
        {
            $email = $_POST['cadastro-email'];
        }

        if (!empty($_POST['cadastro-telefone'])) 
        {
            $telefone = $_POST['cadastro-telefone'];
        }

        if (!empty($_POST['cadastro-cep'])) 
        {
            $cep = $_POST['cadastro-cep'];
        }

        if (!empty($_POST['cadastro-cidade'])) 
        {
            $cidade = $_POST['cadastro-cidade'];
        }

        if (!empty($_POST['cadastro-estado'])) 
        {
            $estado = $_POST['cadastro-estado'];
        }

        if (!empty($_POST['cadastro-rua'])) 
        {
            $rua = $_POST['cadastro-rua'];
        }

        if (!empty($_POST['cadastro-bairro'])) 
        {
            $bairro = $_POST['cadastro-bairro'];
        }
        
        if (!empty($_POST['cadastro-numero'])) 
        {
            $numero = $_POST['cadastro-numero'];
        }
    }

?>

