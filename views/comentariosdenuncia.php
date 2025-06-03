<?php
    require_once "global/links.php";
    require_once "global/conexao.php"; // Aqui usamos PDO
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <title>Comentários das Denúncias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css"> <!-- Ajuste o caminho se necessário -->
</head>

<body>
    <header class="menu-bg">
        <div class="menu">
            <div class="menu-logo">
                <a href="../index.php">FogoZero</a>
            </div>
            <nav class="menu-nav">
                <ul>
                    <li><a href="../index.php">Sobre</a></li>
                    <li><a href="educacao.php">Educação</a></li>
                    <li><a href="../index.php#mapas">Mapas</a></li>
                    <li><a href="denuncia.php">Denuncie</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="comentarios-bg">
        <section class="comentarios-lista" id="comentarios-lista">
            <h1 class="introducao">Todos os Comentários de Denúncias</h1>

            <?php
                try {
                    $stmt = $pdo->prepare("SELECT nome, comentario FROM denuncias ORDER BY id DESC");
                    $stmt->execute();

                    $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    if ($comentarios) {
                        foreach ($comentarios as $comentario) {
                            $nome = htmlspecialchars($comentario['nome']);
                            $texto = htmlspecialchars($comentario['comentario']);
                            echo "<div class='comentario-item'>";
                            echo "<p><strong>Nome:</strong> " . ($nome ?: "Anônimo") . "</p>";
                            echo "<p><strong>Comentário:</strong> $texto</p>";
                            echo "</div>";
                        }
                    } else {
                        echo "<p>Nenhuma denúncia registrada ainda.</p>";
                    }
                } catch (PDOException $e) {
                    echo "<p>Erro ao carregar comentários: " . $e->getMessage() . "</p>";
                }
            ?>
        </section>

        <div style="text-align: center; margin: 2rem 0;">
            <a href="denuncia.php" class="btn btn-secondary">Voltar para Denúncia</a>
        </div>
    </main>

    <?php require_once "global/footer.php"; require_once "global/scripts.php"; ?>
</body>
</html>
