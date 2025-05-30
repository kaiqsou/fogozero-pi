<?php

class Feedback
{
    public function __construct
    (
        private string $data = "",
        private string $comentario = "",
        private string $arquivo = ""
     // private $denuncia = null ?
    ){}

    // métodos GET
    public function getData()
    {
        return $this -> data;
    }

    public function getComentario()
    {
        return $this -> comentario;
    }

    public function getArquivo()
    {
        return $this -> arquivo;
    }

    public function getDenuncia() // ?
    {
        return $this -> denuncia;
    }


    // métodos SET
    public function setData($data)
    {
        $this -> data = $data;
    }

    public function setComentario($comentario)
    {
        $this -> comentario = $comentario;
    }

    public function setArquivo($arquivo)
    {
        $this -> arquivo = $arquivo;
    }

    public function setDenuncia($denuncia) // ?
    {
        $this -> denuncia = $denuncia;
    }
}

?>