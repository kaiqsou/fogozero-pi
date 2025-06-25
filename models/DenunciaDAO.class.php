<?php
class DenunciaDAO extends Conexao
{
    public function __construct()
    {
        parent :: __construct();
    }

    public function inserir($denuncia)
    {
        $sql = "INSERT INTO denuncias(descricao, localizacao, data_denuncia, comentario, imagem, status_denuncia, latitude, longitude, usuario_id) 
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stm = $this -> db -> prepare($sql);
        $stm -> bindValue(1, $denuncia -> getDescricao());
        $stm -> bindValue(2, $denuncia -> getLocalizacao());
        $stm -> bindValue(3, $denuncia -> getData());
        $stm -> bindValue(4, $denuncia -> getComentario());
        $stm -> bindValue(5, $denuncia -> getImagem());
        $stm -> bindValue(6, $denuncia -> getStatus());
		$stm -> bindValue(7, $denuncia -> getLatitude());
		$stm -> bindValue(8, $denuncia -> getLongitude());
        $stm -> bindValue(9, $denuncia -> getUsuario()->getId_usuario());
        $stm -> execute();
		$id = $this->db->lastInsertId();
        $this -> db = null;

        return $id;
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

    public function ver_detalhes($denuncia)
    {
        $sql = "SELECT 
                    d.*, 
                    f.*,
                    u.id_usuario, u.nome 
                FROM denuncias d 
                LEFT JOIN feedbacks f ON f.id_usuario = d.id_usuario 
                LEFT JOIN usuarios u ON f.id_usuario = u.id_usuario 
                WHERE d.id_denuncia = ?";
        try
        {
            $stm = $this -> db -> prepare($sql);
            $stm -> bindValue(1, $denuncia -> getId_denuncia());
            $stm -> execute();
            $this -> db = null;
            return $stm -> fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e) 
        {
            $this -> db = null;
            return "Problema ao buscar os feedbacks";
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
            $this->db = null;
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
        }
        catch(PDOException $e)
        {
            $this->db = null;
			return "Problema ao mudar o status";
        }
    }
	public function buscar_uma($denuncia)
    {
        $sql = "SELECT * FROM denuncias WHERE id_denuncia = ?";

        try 
        {
            $stm = $this -> db -> prepare($sql);
			$stm -> bindValue(1, $denuncia -> getId_denuncia());
			$stm -> execute();

			$this->db = null;

			return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e)
        {
            $this->db = null;
			return "Problema ao buscar uma denuncia";
        }
    }
	
}

?>