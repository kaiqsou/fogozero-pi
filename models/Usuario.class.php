<?php

class Usuario
{
    public function __construct
    (
        private string $nome = "",
        private string $email = "",
        private string $senha = "",
        private string $cpf = "",
        private string $cep = "",
        private string $cidade = "",
        private string $estado = "",
        private string $bairro = "",
        private string $rua = "",
        private string $numero = "",
        private string $imagem = ""
    ){}

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

    public function getCpf()
    {
        return $this -> cpf;
    }

    public function getCep()
    {
        return $this -> cep;
    }

    public function getCidade()
    {
        return $this -> cidade;
    }

    public function getEstado()
    {
        return $this -> estado;
    }

    public function getBairro()
    {
        return $this -> bairro;
    }

    public function getRua()
    {
        return $this -> rua;
    }

    public function getNumero()
    {
        return $this -> numero;
    }

    public function getImagem()
    {
        return $this -> imagem;
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
}

?>