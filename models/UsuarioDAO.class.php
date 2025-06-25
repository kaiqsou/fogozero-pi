<?php

	class usuarioDAO extends Conexao
	{
		public function __construct()
		{
			parent :: __construct();
		}
		
		public function autenticacao($usuario)
		{
			$sql = "SELECT * FROM usuarios WHERE email = ?";
			try
			{
				$stm = $this -> db -> prepare($sql);
				$stm -> bindValue(1, $usuario -> getEmail());

				$stm -> execute();
				$this -> db = null;
				
				return $stm -> fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this -> db = null;
				
				return $e -> getMessage();
			}
		}

		public function inserirUsuario($usuario)
		{
			$sql = "INSERT INTO usuarios(nome, email, telefone, senha, cep, cidade, estado, bairro, rua, numero, latitude, longitude) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
				$stm -> bindValue(11, $usuario -> getLatitude());
				$stm -> bindValue(12, $usuario -> getLongitude());
				$stm -> execute();

				$this -> db = null;

				return "Usuário cadastrado com sucesso!";
			}
			catch(PDOException $e)
			{
				echo $e -> getCode();
				echo $e -> getMessage();

				$this -> db = null;
				die();
			}
		}
		
		public function todos_com_endereco()
		{
			$sql = "SELECT nome, latitude, longitude, email FROM usuarios WHERE TRIM(latitude) <> '' AND TRIM(longitude) <> ''";
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
				
				return $e -> getMessage();
			}
		}

		public function buscar_um($usuario)
		{
			$sql = "SELECT * FROM usuarios WHERE id_usuario = ?";

			try 
			{
				$stm = $this -> db -> prepare($sql);
				$stm -> bindValue(1, $usuario -> getId_usuario());
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