<?php

    class Alerta
    {
        private int $id_alerta;

        public function __construct
        (
            private string $data = ""
            // private $denuncia = null
        ){}

        // métodos GET
        public function getId_alerta()
        {
            return $this -> id_alerta;
        }

        public function getData()
        {
            return $this -> data;
        }
    }

?>