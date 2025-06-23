<?php

date_default_timezone_set('America/Sao_Paulo');

require_once "Conexao.class.php";
require_once "Denuncia.class.php";  

class DenunciaDAO extends Conexao
{
    public function __construct()
    {
        parent :: __construct();
    }

    public function inserir($denuncia)
    {
        $sql = "INSERT INTO denuncias(descricao, localizacao, data_denuncia, comentario, imagem, status_denuncia, usuario_id) 
        VALUES(?, ?, ?, ?, ?, ?, ?)";
        $stm = $this -> db -> prepare($sql);
        $stm -> bindValue(1, $denuncia -> getDescricao());
        $stm -> bindValue(2, $denuncia -> getLocalizacao());
        $stm -> bindValue(3, $denuncia -> getData());
        $stm -> bindValue(4, $denuncia -> getComentario());
        $stm -> bindValue(5, $denuncia -> getImagem());
        $stm -> bindValue(6, $denuncia -> getStatus());
        $stm -> bindValue(7, $denuncia -> getUsuario() -> getId_usuario());
        $stm -> execute();
        $this -> db = null;

        return "Denúncia inserida com sucesso!";
    }

    public function buscar_denuncias()
    {
        $sql = "SELECT * FROM denuncias";
        try
		{
			$stm = $this -> db -> prepare($sql);
			$stm -> execute();
            
			$this -> db = null;

			return $stm -> fetchAll(PDO::FETCH_OBJ);
		}
		catch(PDOException $e) 
		{
			$this -> db = null;
			return "Problema ao buscar as denúncias";
		}
    }

    public function buscar_denuncias_ativas($denuncia)
    {
        $sql = "SELECT * FROM denuncias WHERE status_denuncia = ?";

        try 
        {
            $stm = $this -> db -> prepare($sql);
			$stm -> bindValue(1, $denuncia -> getStatus());
			$stm -> execute();

			$this->db = null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e)
        {
            $this -> db = null;
			return "Problema ao buscar todos os produtos";
        }
    }

    public function mudar_status($denuncia)
    {
        $sql = "UPDATE denuncias SET status_denuncia = ? WHERE id_denuncia = ?";

        try 
        {
            $stm = $this -> db -> prepare($sql);
            $stm -> bindValue(1, $denuncia -> getStatus());
            $stm -> bindValue(2, $denuncia -> getId_denuncia());

            $stm -> execute();

            $this -> db = null;
        }
        catch(PDOException $e)
        {
            $this->db = null;
			return "Problema ao mudar o status";
        }
    }
}

?>