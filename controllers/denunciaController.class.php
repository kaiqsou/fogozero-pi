<?php 
    require_once "models/Conexao.class.php";
    require_once "models/DenunciaDAO.class.php";
    require_once "models/Denuncia.class.php";

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
            session_start();
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
                    $denuncia = new Denuncia
                    ( 
                        0,
                        $_POST["descricao"], 
                        $_POST["localizacao"],
                        date('Y-m-d H:i'),
                        $_POST["comentario"],
                        $_FILES["imagem"]["name"],
                        "Ativo",
                        $_SESSION["id"]
                    );
                    
                    $denunciaDAO = new DenunciaDAO();
                    $retorno = $denunciaDAO -> inserir($denuncia);
                    header("location:index.php?controle=denunciaController&metodo=listarDenunciasAtivas&msg=$retorno");
                    exit;
                }
            }
            require_once "views/denuncia.php";
        }
    }
?>