<?php

	class usuarioDAO extends Conexao
	{
		public function __construct()
		{
			parent :: __construct();
		}
		
		public function autenticacao($usuario)
		{
			$sql = "SELECT nome FROM usuarios WHERE email = ? AND senha = ?";
			try
			{
				$stm = $this -> db -> prepare($sql);
				$stm -> bindValue(1, $usuario -> getEmail());
				$stm -> bindValue(2, $usuario -> getSenha());
				$stm -> execute();
				$this -> db = null;
				
				return $stm -> fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				
				return "Problema na autenticação do usuário";
			}
		}

		public function inserirUsuario($usuario)
		{
			$sql = "INSERT INTO usuarios(nome, email, telefone, senha, cep, cidade, estado, bairro, rua, numero) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			try 
			{
				$stm = $this -> db -> prepare($sql);
				$stm -> bindValue(1, $usuario -> getNome());
				$stm -> bindValue(2, $usuario -> getEmail());
				$stm -> bindValue(3, $usuario -> getTelefone());
				$stm -> bindValue(4, $usuario -> getSenha());
				$stm -> bindValue(5, $usuario -> getCep());
				$stm -> bindValue(6, $usuario -> getCidade());
				$stm -> bindValue(7, $usuario -> getEstado());
				$stm -> bindValue(8, $usuario -> getBairro());
				$stm -> bindValue(9, $usuario -> getRua());
				$stm -> bindValue(10, $usuario -> getNumero());
				$stm -> execute();

				$this -> db = null;

				return "Usuário cadastrado com sucesso!";
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				
				return "Problema ao cadastrar usuário.";
			}
		}
	}

?>