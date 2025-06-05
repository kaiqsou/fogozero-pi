<?php

    class Alerta
    {
        public function __construct
        (
            private string $conteudo = "",
            private datetime $data = null
        ){}

        // métodos GET
        public function getConteudo()
        {
            return $this -> conteudo;
        }

        public function getData()
        {
            return $this -> data;
        }

        // métodos SET
        public function setData($data)
        {
            $this -> data = $data;
        }
    }

?>