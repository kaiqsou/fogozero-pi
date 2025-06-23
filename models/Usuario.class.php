<?php

class Usuario
{
    
    public function __construct
    (
        private int $id_usuario = 0,
        private string $nome = "",
        private string $email = "",
        private string $telefone = "",
        private string $senha = "",
        private string $cep = "",
        private string $cidade = "",
        private string $estado = "",
        private string $bairro = "",
        private string $rua = "",
        private string $numero = "",
        private string $imagem = ""
    ){}

    // métodos GET

    public function getId_usuario()
    {
        return $this -> id_usuario;
    }
    
    public function getNome()
    {
        return $this -> nome;
    }

    public function getEmail()
    {
        return $this -> email;
    }

    public function getTelefone()
    {
        return $this -> telefone;
    }

    public function getSenha()
    {
        return $this -> senha;
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
}

?>