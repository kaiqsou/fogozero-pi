<?php 
	date_default_timezone_set("America/Sao_Paulo");
	require_once "geocodificarEndereco.php";
    require_once "models/Conexao.class.php";
    require_once "models/DenunciaDAO.class.php";
    require_once "models/Denuncia.class.php";
	require_once "models/Usuario.class.php";
	require_once "models/UsuarioDAO.class.php";
	require_once "models/Feedback.class.php";
	require_once "models/FeedbackDAO.class.php";

	if(!isset($_SESSION))
	{
		session_start();
	}

    class denunciaController
    {
        public function inicio()
        {
            $msg = ["", "", "", ""];
            $erro = false;

            require_once "views/denuncia.php";
        }

        public function listarTodas()
        {
            $denunciaDAO = new DenunciaDAO();
            $retorno = $denunciaDAO -> buscar_denuncias();

            require_once "views/gerenciar-denuncias.php";   
        }

        public function listarDenunciasAtivas()
        {
            $denuncia = new Denuncia(status_denuncia: "Ativo");
            $denunciaDAO = new DenunciaDAO();

            $retorno = $denunciaDAO -> buscar_denuncias_ativas($denuncia);

            require_once "views/todas-denuncias.php";
            return $retorno;
            
        }

        public function detalhes()
		{
			if(isset($_GET["id"]))
			{
				//buscar uma denuncia
				$denuncia = new Denuncia($_GET["id"]);
				$denunciaDAO = new DenunciaDAO();
				$retorno = $denunciaDAO -> buscar_uma($denuncia);
				
				require_once "views/detalhes.php";
			}
		}

        public function listarFeedbacks()
        {
            if(isset($_GET["id"]))
			{
				$denuncia = new Denuncia($_GET["id"]);
				$denunciaDAO = new DenunciaDAO();
				$retorno = $denunciaDAO -> buscar_uma($denuncia);

                $usuario = new Usuario(id_usuario: $retorno[0] -> usuario_id);
				$usuarioDAO = new UsuarioDAO();
                $user = $usuarioDAO -> buscar_um($usuario);

				$feedback = new Feedback(denuncia: $denuncia);
				$feedbackDAO = new FeedbackDAO();
				$feedbacks = $feedbackDAO -> buscar_feedbacks_denuncia($feedback);
				
				require_once "views/feedbacks.php";
			}
        }

        public function alterar_status()
        {
            if (isset($_GET["id"]) && isset($_GET["status"]))
            {
                $id = $_GET["id"];
                $status = $_GET["status"];

                $denuncia = new Denuncia(id_denuncia: $id, status_denuncia: $status);
                $denunciaDAO = new DenunciaDAO();
                $denunciaDAO -> mudar_status($denuncia);
            }
            header("location:index.php?controle=denunciaController&metodo=listarTodas");
        }

        public function inserir()
        {
            $msg = ["", ""];
            $erro = false;

            if ($_POST)
            {
                if(empty($_POST["descricao"]))
                {
                    $msg[0] = "Preencha a descrição";
                    $erro = true;
                }
                
                if(empty($_POST["localizacao"]))
                {
                    $msg[1] = "Preencha o local";
                    $erro = true;
                }

                if($_FILES["imagem"]["name"] == "")
                {
                    $msg[2] = "Selecione uma imagem";
                    $erro = true;
                }
                else 
                {
                    if($_FILES["imagem"]["type"] != "image/png" && $_FILES["imagem"]["type"] != "image/jpg" && 
					$_FILES["imagem"]["type"] != "image/jpeg")
					{
						$msg[2] = "Tipo de imagem inválido";
						$erro = true;
					}
                }

                if (!$erro) 
                {
                    $ret = geocodificarEndereco($_POST["localizacao"]);
					//echo $_POST["localizacao"];
					//var_dump($ret);
					//die();
                    $usuario = new Usuario($_SESSION["id"]);
                    $denuncia = new Denuncia
                    ( 
                        0,
                        $_POST["descricao"], 
                        $_POST["localizacao"],
                        $ret["lat"], 
						$ret["lng"],
                        date('Y-m-d H:i'),
                        $_POST["comentario"],
                        $_FILES["imagem"]["name"],
                        "Ativo",
                        $usuario
                    );
                    //var_dump($denuncia);
					//die();
                    $denunciaDAO = new DenunciaDAO();
                    $id = $denunciaDAO -> inserir($denuncia);
                    $destino = 'denuncias/' . basename($_FILES['imagem']['name']);
					move_uploaded_file($_FILES['imagem']['tmp_name'], $destino);
                    header("location:index.php?controle=alertaController&metodo=enviar&id=$id");
                    exit;

                    /*
                    if ($_SESSION["tipo"] === "Comum")
                    {
                        header("location:index.php?controle=denunciaController&metodo=listarDenunciasAtivas&msg=$retorno");
                    }
                    else 
                    {
                        header("location:index.php?controle=denunciaController&metodo=listarTodas&msg=$retorno");
                    }
                    exit;
                    */
                }
            }
            require_once "views/denuncia.php";
        }
    }
?>