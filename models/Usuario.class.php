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
        private string $imagem = "",
		private string $latitude = "",
		private string $longitude = ""
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

    	public function getLatitude()
    {
        return $this -> latitude;
    }
    
	public function getLongitude()
    {
        return $this -> longitude;
    }

    // métodos SET

	public function setRua($rua)
    {
        $this -> rua = $rua;
    }

	public function setNumero($numero)
    {
        $this -> numero = $numero;
    }

	public function setBairro($bairro)
    {
        $this -> bairro = $bairro;
    }

	public function setCidade($cidade)
    {
        $this -> cidade = $cidade;
    }

	public function setCep($cep)
    {
        $this -> cep = $cep;
    }

	public function setEstado($estado)
    {
        $this -> estado = $estado;
    }

	public function setLatitude($latitude)
    {
        $this -> latitude = $latitude;
    }

	public function setLongitude($longitude)
    {
        $this -> longitude = $longitude;
    }
}

?>