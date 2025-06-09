<?php
// salvar-cadastro.php

try {
    // conexão com o banco de dados
   $pdo = new PDO('mysql:host=localhost;dbname=fogo_zero', 'root', '');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // pegar os dados do POST
    $nome = $_POST['cadastro-nome'] ?? '';
    $email = $_POST['cadastro-email'] ?? '';
    $telefone = $_POST['cadastro-telefone'] ?? '';
    $senha = $_POST['cadastro-senha'] ?? '';
    $confirma_senha = $_POST['confirma-senha'] ?? '';

    // pegar checkboxes
    $alerta_sms = isset($_POST['alerta-sms']) ? 1 : 0;
    $alerta_email = isset($_POST['alerta-email']) ? 1 : 0;

    // validar senha
    if ($senha !== $confirma_senha) {
        echo "Erro: as senhas não conferem! <a href='cadastro.php'>Voltar</a>";
        exit;
    }

    // gerar hash da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // inserir no banco
    $sql = "INSERT INTO usuarios (nome, email, telefone, senha, alerta_sms, alerta_email) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $telefone, $senha_hash, $alerta_sms, $alerta_email]);

    // redirecionar
    header('Location: cadastro-sucesso.php');
    exit;
    
} catch (PDOException $e) {
    echo "Erro no banco de dados: " . $e->getMessage();
    exit;
}
?>
