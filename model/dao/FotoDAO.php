<?php 
	class FotoDAO{
		public function cadastrar_Foto($conec, $conteudo, $tamanho, $nome, $tipo, $situacao, $id_usuario){
			$result = $conec->exec("INSERT INTO foto (conteudo, tamanho, nome, tipo, situacao, usuario_id_usuario) VALUES('{$conteudo}','{$tamanho}','{$nome}','{$tipo}', '{$situacao}','{$id_usuario}')");

			if ($result) {
				echo "Upload OK!";
			}
			else{
				echo "Falha no upload";
			}
		}

		public function listar_Foto($conec){
			$result = $conec->query("SELECT * FROM foto");

			return $result;
		}		

		public function listar_FotosPublicadas($conec){
			$result = $conec->query("SELECT * FROM foto WHERE situacao = 1");

			return $result;
		}		

		public function listar_FotosPendentes($conec){
			$result = $conec->query("SELECT * FROM foto WHERE situacao = 0");

			return $result;
		}

		public function aprovar_Foto($conec, $id_foto){
			$result = $conec->query("UPDATE foto SET situacao = 1 WHERE id_foto = '{$id_foto}'");

		}

		public function recusar_Foto($conec, $id_foto){
			$result = $conec->query("UPDATE foto SET situacao = 2 WHERE id_foto = '{$id_foto}'");

		}

		public function listar_FotoAdm($conec){
			$result = $conec->query("SELECT * FROM foto,usuario WHERE usuario.nivel = 1 and foto.situacao = 0");

			return $result;

		}







	}
?>