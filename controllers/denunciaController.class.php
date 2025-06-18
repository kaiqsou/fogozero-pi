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

        public function denuncias()
		{
            $denunciaDAO = new DenunciaDAO();
            $retorno = $denunciaDAO-> buscar_denuncias();

			require_once "views/todas-denuncias.php";
		}

        public function listar()
        {
            $denunciaDAO = new DenunciaDAO();
            $retorno = $denunciaDAO -> buscar_denuncias();

            require_once "views/todas-denuncias.php";   
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

                if (!$erro) 
                {
                    $denuncia = new Denuncia
                    ( 
                        0,
                        $_POST["descricao"], 
                        $_POST["localizacao"],
                        date('Y-m-d H:i'),
                        $_POST["comentario"],
                        $_SESSION["id"]
                    );
                    
                    $denunciaDAO = new DenunciaDAO();
                    $retorno = $denunciaDAO -> inserir($denuncia);
                    header("location:index.php?controle=denunciaController&metodo=listar&msg=$retorno");
                    exit;
                }
            }
            require_once "views/denuncia.php";
        }
    }
?>