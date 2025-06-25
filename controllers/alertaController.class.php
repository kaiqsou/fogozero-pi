<?php
	date_default_timezone_set("America/Sao_Paulo");
	require_once "geocodificarEndereco.php";
	require_once "config.php";
	require_once "models/Conexao.class.php";
	require_once "models/usuarioDAO.class.php";
	require_once "models/denunciaDAO.class.php";
	require_once "models/Denuncia.class.php";
	require_once "models/Alerta.class.php";
	require_once "models/alertaDAO.class.php";
	
	class alertaController
	{
		public function enviar()
		{
			//id da denuncia
			if(isset($_GET["id"]))
			{
				// Raio de abrangência em metros
				$raio = 3000;
				$usuarioDAO = new usuarioDAO();
				$retorno = $usuarioDAO->todos_com_endereco();
				//var_dump($retorno);
				//die();
				$denuncia = new Denuncia($_GET["id"]);
				$denunciaDAO = new denunciaDAO();
				$ret = $denunciaDAO->buscar_uma($denuncia);
				//var_dump($ret);
				//die();
				$moradoresDentro = [];
				foreach($retorno as $morador)
				{
					$dist = calcularDistancia($ret[0]->latitude, $ret[0]->longitude, $morador->latitude, $morador->longitude);
					if ($dist <= $raio)
					{
						//$distancia = round($dist);
						$moradoresDentro[] = $morador;
					}
				}
				
				//var_dump($moradoresDentro);
				//die();
				if(count($moradoresDentro) > 0)
				{				
					//enviar email
					$assunto = "Alerta de Incêndio";
					$remetente = "vania12t@gmail.com";
					$nomeRemetente = "FogoZero";
					foreach($moradoresDentro as $morador)
					{
						
						$destino = $morador->email;
						$nomeDestino = $morador->nome;
						$mensagem = "<h2>Senhor(a) " . $morador->nome . "</h2><br /><p>
						Estamos enviando um alerta de incêndio próximo ao endereço cadastrado no site FogoZero.<br />Entre no site para mais informações.</p>
						
						<br /><br />
						
						<p>Atenciosamente<br />" . $nomeRemetente . "</p>";
						$envio = sendMail($assunto, $mensagem, $remetente, $nomeRemetente, $destino, $nomeDestino);
					}
					//gravar alerta
					//echo $ret[0]->id_denuncia;
					//die();
					$denuncia = new Denuncia($ret[0]->id_denuncia);
					$alerta = new Alerta(0, date("Y-m-d H:i:s"), $denuncia, count($moradoresDentro));
					$alertaDAO = new alertaDAO();
					$mensagem = $alertaDAO->inserir($alerta);
					//ver para onde vai
					//header("Location:index.php");
				}
			}
			
		}
	}
?>