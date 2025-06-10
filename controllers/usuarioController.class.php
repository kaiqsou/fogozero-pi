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
				echo "Entrou aqui";
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
					echo "Problema nas crendenciais";
				}
			}
			else 
			{
				require_once "views/login.php";
			}
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


<?php
/*
   public function login()
    {
        if($_POST){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userDAO = new UserDAO();
            $user = $userDAO->login($email, $password); 

            if ($user) {
      
                $_SESSION['user'] = [
                    'id' => $user['id_user'],       
                    'name' => $user['name_user'],
                    'email' => $user['email_user']
                ];

                header('Location: /');
                exit;
            }
            else
            {
                echo "Email ou senha inválido.";
            }
        }else{
            require_once 'views/login_form.php';
        }
        
    }
		*/
?>