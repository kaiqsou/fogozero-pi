<?php
	require_once "models/Conexao.class.php";
	require_once "models/UsuarioDAO.class.php";
	require_once "models/Usuario.class.php";

	if(!isset($_SESSION))
	{
		session_start();
	}

	class usuarioController
	{
		public function login()
		{
			if($_POST)
			{
				$usuario = new Usuario(email:$_POST["login-email"], senha:$_POST["login-senha"]);
				
				$usuarioDAO = new usuarioDAO();
				
				$retorno = $usuarioDAO->autenticacao($usuario);

				if(count($retorno) > 0)
				{
					//encontrou o usuário
					echo "Login efetuado com sucesso";
									
				$_SESSION["nome"] = $retorno[0]->nome;
				header("location:index.php");
				//die();
				}
				else
				{
					//não encontrou o usuário
					echo "Problema nas credenciais";
				}
			}
				require_once "views/login.php";
		}//fim login
        
		public function logout()
		{
			
			$_SESSION = array();
			session_destroy();
			header("location:index.php");
			die();
		}
	}//fim da classe
?>