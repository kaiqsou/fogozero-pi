<?php

class Usuario
{
    public function __construct
    (
        private string $nome = "",
        private string $email = "",
        private string $senha = "",
        int $ddd = 0,
        string $numero = ""
    )
    {
        $this -> telefone[] = new Telefone($ddd, $numero);
    }

    // métodos GET
    public function getNome()
    {
        return $this -> nome;
    }

    public function getEmail()
    {
        return $this -> email;
    }

    public function getSenha()
    {
        return $this -> senha;
    }

    public function getTelefone()
    {
        return $this -> telefone;
    }


        // métodos SET
    public function setNome($nome)
    {
        $this -> nome = $nome;
    }

    public function setEmail($email)
    {
        $this -> email = $email;
    }

    public function setSenha($senha)
    {
        $this -> senha = $senha;
    }

    public function setTelefone(int $ddd, string $numero)
    {
          $this -> telefone = new Telefone($ddd, $numero);
    }
}

?>