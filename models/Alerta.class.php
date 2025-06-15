<?php

    class Alerta
    {
        public function __construct
        (
            private string $data = ""
        ){}

        // métodos GET

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