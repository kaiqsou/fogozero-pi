<?php
    
    class Denuncia
    {
        

        public function __construct
        (
			private int $id_denuncia = 0,
            private string $descricao = "",
            private string $localizacao = "",
            private string $latitude = "",
            private string $longitude = "",
            private string $data_denuncia = "", 
            private string $comentario = "",
            private string $imagem = "",
            private string $status_denuncia = "",
            private  $usuario = null
            // private $alerta = null,
            // private $feedback = null
        ){}

        // métodos GET
        public function getId_denuncia()
        {
            return $this -> id_denuncia;
        }

        public function getDescricao()
        {
            return $this -> descricao;
        }

        public function getLocalizacao()
        {
            return $this -> localizacao;
        }

        public function getData()
        {
            return $this -> data_denuncia;
        }

        public function getComentario()
        {
            return $this -> comentario;
        }

        public function getImagem()
        {
            return $this -> imagem;
        }

        public function getStatus()
        {
            return $this -> status_denuncia;
        }

        public function getUsuario()
        {
            return $this -> usuario;
        }
		public function getLatitude()
        {
            return $this -> latitude;
        }
		public function getLongitude()
        {
            return $this -> longitude;
        }
    }

?>