<?php

    class Alerta
    {
         public function __construct
        (
			private int $id_alerta = 0,
            private string $data = "",
			private $denuncia = null,
			private int $quantidade = 0
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
		public function getDenuncia()
        {
            return $this -> denuncia;
        }
		public function getQuantidade()
        {
            return $this -> quantidade;
        }
    }

?>