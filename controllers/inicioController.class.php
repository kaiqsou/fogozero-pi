<?php
	class inicioController
	{
		public function inicio()
		{
			require_once "views/tela-inicial.php";
		}

		public function cadastro()
		{
			require_once "views/cadastro.php";
		}

		public function educacao()
		{
			require_once "views/educacao.php";
		}

		public function denuncia()
		{
			require_once "views/denuncia.php";
		}

		public function relatos()
		{
			require_once "views/relatos.php";
		}
	}
?>