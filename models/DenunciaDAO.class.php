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
        // ajeitar o insert, conseguir o id do usuário e as outras informações
        $sql = "INSERT INTO denuncias(descricao, localizacao, data_denuncia, comentario, usuario_id) 
        VALUES(?, ?, ?, ?, ?)";
        $stm = $this -> db -> prepare($sql);
        $stm -> bindValue(1, $denuncia -> getDescricao());
        $stm -> bindValue(2, $denuncia -> getLocalizacao());
        $stm -> bindValue(3, date('Y-m-d H:i'));
        $stm -> bindValue(4, $denuncia -> getComentario());
        $stm -> bindValue(5, $denuncia -> getId_usuario());
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