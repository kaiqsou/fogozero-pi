<?php

    enum Status
    {
        case ACTIVE;
        case INACTIVE;
    }

    class Denuncia
    {
            public function __construct(
                private string $descricao = "",
             // private string $localizacao = "",
                private string $latitude = "",
                private string $longitude = "",
                private string $data = "", 
                private string $comentario = "",
                private string $arquivo = "",
                private Status $status = Status::ACTIVE,
                private $usuario = null,
                private $alerta = null,
                private $feedback = null
            ){}

            // métodos GET
            public function getDescricao()
            {
                return $this -> descricao;
            }

            public function getLatitude()
            {
                return $this -> latitude;
            }

            public function getLongitude()
            {
                return $this -> longitude;
            }

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

            public function getStatus()
            {
                return $this -> status;
            }

            public function getUsuario()
            {
                return $this -> usuario;
            }

            public function getFeedback()
            {
                return $this -> feedback;
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

            public function setLatitude($latitude)
            {
                $this -> latitude = $latitude;
            }

            public function setLongitude($longitude)
            {
                $this -> longitude = $longitude;
            }

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

            public function setStatus($status)
            {
                $this -> status = $status;
            }

            public function setUsuario($usuario)
            {
                $this -> usuario = $usuario;
            }

            public function setFeedback($feedback)
            {
                $this -> feedback = $feedback;
            }


    }

?>