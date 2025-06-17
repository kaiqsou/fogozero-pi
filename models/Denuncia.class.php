<?php

    enum Status
    {
        case ACTIVE;
        case INACTIVE;
    }

    class Denuncia
    {
        public function __construct
        (
            private int $id_denuncia = 0,
            private string $descricao = "",
            private string $localizacao = "",
            // private string $latitude = "",
            // private string $longitude = "",
            private string $data = "", 
            private string $comentario = ""
            // private string $arquivo = "",
            // private Status $status = Status::ACTIVE,
            // private $usuario = null,
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