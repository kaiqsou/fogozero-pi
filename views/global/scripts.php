<?php

?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>

<script>
        document.querySelector("form").addEventListener("submit", function(e) {
        const nome = document.getElementById("cadastro-nome").value.trim();
        const senha = document.getElementById("cadastro-senha").value;
        const confirmarSenha = document.getElementById("confirma-senha").value;

        if (nome === "") {
            alert("Por favor, preencha seu nome.");
            e.preventDefault();
        }

        if (senha.length < 6) {
            alert("A senha deve ter no mínimo 6 caracteres.");
            e.preventDefault();
        }

        if (senha !== confirmarSenha) {
            alert("As senhas não coincidem.");
            e.preventDefault();
        }
    });
</script>