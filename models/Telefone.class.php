<?php

class Usuario
{
        public function __construct(
            private int $ddd = 0,
            private string $numero = "",
            private $usuario = null
        ){}

        // métodos GET
        public function getDdd()
        {
            return $this -> ddd;
        }

        public function getNumero()
        {
            return $this -> numero;
        }

        public function getUsuario()
        {
            return $this -> usuario;
        }

        // métodos SET
        public function setDdd($ddd)
        {
            $this -> ddd = $ddd;
        }

        public function setNumero($numero)
        {
            $this -> numero = $numero;
        }

        public function setUsuario($usuario)
        {
            $this -> usuario = $usuario;
        }

}

?>