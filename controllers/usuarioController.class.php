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
		public function cadastro()
		{
			$msg = ["", "", "", "", ""];
            $erro = false;

			if($_POST)
			{
				if(empty($_POST["cadastro-nome"]))
				{
					$msg[0] = "Preencha o nome";
                    $erro = true;
				}

				if(empty($_POST["cadastro-email"]))
				{
					$msg[1] = "Preencha o e-mail";
                    $erro = true;
				}
				else 
				{
					$usuario = new Usuario(email: $_POST["cadastro-email"]);
					$usuarioDAO = new UsuarioDAO();
					$retorno = $usuarioDAO -> autenticacao($usuario);

					if (count($retorno) > 0)
					{
						$msg[1] = "E-mail já cadastrado";
						$erro = true;
					}
				}

				if(empty($_POST["cadastro-senha"]))
				{
					$msg[2] = "Digite uma senha";
					$erro = true;
				}

				if(empty($_POST["confirma-senha"]))
				{
					$msg[3] = "Por favor, confirme sua senha";
					$erro = true;
				}

				if($_POST["cadastro-senha"]!= "" && $_POST["confirma-senha"] != "")
				{
					if($_POST["cadastro-senha"] != $_POST["confirma-senha"])
					{
						$msg[3] = "Senhas não conferem";
						$erro = true;
					}
				}

				if (!$erro)
				{
					$usuario = new Usuario
					(
						$_POST["cadastro-nome"],
						$_POST["cadastro-email"],
						$_POST["cadastro-telefone"],
						password_hash($_POST["cadastro-senha"], PASSWORD_DEFAULT),
						$_POST["cadastro-cep"],
						$_POST["cadastro-cidade"],
						$_POST["cadastro-estado"],
						$_POST["cadastro-bairro"],
						$_POST["cadastro-rua"],
						$_POST["cadastro-numero"] 
					);

					$usuarioDAO = new UsuarioDAO();
                    $retorno = $usuarioDAO -> inserirUsuario($usuario);
                    header("location:index.php?controle=usuarioController&metodo=login&msg=$retorno");
                    exit;
				}
			}
			require_once "views/cadastro.php";
		}

		public function login()
		{	
			if($_POST)
			{

				$usuario = new Usuario(email:$_POST["login-email"], senha:$_POST["login-senha"]);
				$usuarioDAO = new UsuarioDAO();
				$retorno = $usuarioDAO->autenticacao($usuario);

				if(count($retorno) > 0)
				{
					if(password_verify($_POST["login-senha"], $retorno[0] -> senha))
					{
						echo "Login efetuado com sucesso";
						$_SESSION["id"] = $retorno[0]-> id_usuario;
						$_SESSION["nome"] = $retorno[0]-> nome;
						$_SESSION["tipo"] = $retorno[0]-> tipo_usuario;
						header("location:index.php");
						die();
					}
				}
				else
				{
					$_SESSION["mensagem"] = "Houve algum problema nas credenciais. Por favor, tente novamente.";
					header("location:index.php?controle=usuarioController&metodo=login");
					die();
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

