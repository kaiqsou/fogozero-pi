<?php

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
        $sql = "INSERT INTO denuncias(descricao, localizacao, data_denuncia, comentario) 
        VALUES(?, ?, ?, ?)";
        $stm = $this -> db -> prepare($sql);
        $stm -> bindValue(1, $denuncia -> getDescricao());
        $stm -> bindValue(2, $denuncia -> getLocalizacao());
        $stm -> bindValue(3, $denuncia -> getData());
        $stm -> bindValue(4, $denuncia -> getComentario());
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
}

?>