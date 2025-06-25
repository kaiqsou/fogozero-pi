<?php
	class alertaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		public function inserir($alerta)
		{
			
			$sql = "INSERT INTO alertas(data_hora, denuncia_id, quantidade) 
			VALUES(?, ?, ?)";
			$stm = $this -> db -> prepare($sql);
			$stm -> bindValue(1, $alerta -> getData());
			$stm -> bindValue(2, $alerta -> getDenuncia()->getId_denuncia());
			$stm -> bindValue(3, $alerta -> getQuantidade());
			
			$stm -> execute();
			
			$this -> db = null;

			return "Alerta cadastrado com sucesso";
    
		}
	}
?>