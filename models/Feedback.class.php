<?php

class Feedback
{
    public function __construct
    (
		private int $id_feedback = 0,
        private string $data_feedback = "",
        private string $comentario = "",
        private string $imagem = "",
        private $usuario = null,
        private $denuncia = null
    ){}

    // métodos GET
    public function getId_feedback()
    {
        return $this -> id_feedback;
    }

    public function getData()
    {
        return $this -> data_feedback;
    }

    public function getComentario()
    {
        return $this -> comentario;
    }

    public function getImagem()
    {
        return $this -> imagem;
    }

	public function getUsuario()
    {
        return $this -> usuario;
    }
    
	public function getDenuncia()
    {
        return $this -> denuncia;
    }
}

?>