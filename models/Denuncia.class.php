<?php

    class Denuncia
    {
            public function __construct(
                private string $descricao = "",
                private string $latitude = "",
                private string $longitude = "",
                private string $data = "", 
                private string $comentario,
                private string $arquivo,
                private $usuario = null
            )
            {
                $this -> localizacao = new Localizacao($latitude, $longitude);  // daria certo? ou é melhor $localização lá em cima mesmo?
            }

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

            public function getArquivo()
            {
                return $this -> arquivo;
            }

            public function getUsuario()
            {
                return $this -> usuario;
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

            public function setArquivo($arquivo)
            {
                $this -> arquivo = $arquivo;
            }


            public function setUsuario($usuario)
            {
                $this -> usuario = $usuario;
            }


    }

?>