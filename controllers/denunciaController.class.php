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
            $msg = ["", "", "", ""];
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
                
                if(empty($_POST["data"]))
                {
                    $msg[2] = "Preencha a data";
                    $erro = true;
                }

                if(empty($_POST["hora"]))
                {
                    $msg[3] = "Preencha a hora";
                    $erro = true;
                }

                if (!$erro) 
                {
                    $dataHora = $_POST["data"] . " " . $_POST["hora"];
                    $denuncia = new Denuncia
                    (
                        0, 
                        $_POST["descricao"], 
                        $_POST["localizacao"], 
                        $dataHora,
                        $_POST["comentario"]
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