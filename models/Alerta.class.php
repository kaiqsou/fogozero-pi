<?php

    class Alerta
    {

        public function __construct
        (
            private int $id_alerta = 0,
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