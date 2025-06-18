<?php

    enum Status
    {
        case ACTIVE;
        case INACTIVE;
    }

    
    class Denuncia
    {
        private int $id_denuncia;

        public function __construct
        (
            private string $descricao = "",
            private string $localizacao = "",
            // private string $latitude = "",
            // private string $longitude = "",
            private string $data = "", 
            private string $comentario = "",
            // private string $arquivo = "",
            // private Status $status = Status::ACTIVE,
            private int $id_usuario = 1
            // private $alerta = null,
            // private $feedback = null
        ){}

        // métodos GET
        public function getDescricao()
        {
            return $this -> descricao;
        }

        public function getData()
        {
            return $this -> data;
        }

        public function getComentario()
        {
            return $this -> comentario;
        }

        public function getLocalizacao()
        {
            return $this -> localizacao;
        }

        public function getId_usuario()
        {
            return $this -> id_usuario;
        }

        // métodos SET
        public function setDescricao($descricao)
        {
            $this -> descricao = $descricao;
        }

        public function setData($data)
        {
            $this -> data = $data;
        }

        public function setComentario($comentario)
        {
            $this -> comentario = $comentario;
        }

    }

?>