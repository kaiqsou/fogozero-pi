<?php

    enum Status
    {
        case ACTIVE;
        case INACTIVE;
    }

    class Denuncia
    {
            public function __construct(
                private int $id_denuncia = 0,
                private string $descricao = "",
                private string $localizacao = "",
                private string $data = "", 
                private string $comentario = ""
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
    }

?>