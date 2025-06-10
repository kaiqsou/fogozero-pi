<?php

	class usuarioDAO extends Conexao
	{
		public function __construct()
		{
			// a classe conexão não tem parâmetros!
			parent :: __construct();
		}
		
		public function autenticacao($usuario)
		{
			// por segurança, não informar diretamente email e senha
			$sql = "SELECT nome FROM usuarios WHERE email = ? AND senha = ?";
			try
			{
				$stm = $this -> db -> prepare($sql);
				$stm -> bindValue(1, $usuario -> getEmail());
				$stm -> bindValue(2, $usuario -> getSenha());
				$stm -> execute();
				$this -> db = null;	// fecha a conexão
				
				// retorna tudo que encontrou (nada ou um único objeto)
				return $stm -> fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				return "Problema na autenticação do usuário";
				$this -> db = null;
			}
		}
	}

?>