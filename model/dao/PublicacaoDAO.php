<?php 
	class PublicacaoDAO{
		public function cadastrar_Publicacao($conec, $id_foto){
				//executando a query de inserção. 
			$result = $conec->exec("INSERT INTO publicacao (foto_id_foto) VALUES('{$id_foto}')");

			if ($result) {
	    		echo "Publicado com sucesso!";
	    		//header('LOCATION: -index.php');
			} else {
	   			echo "Falha ao salvar a imagem";
			}
		}

		public function listar_TodasPublicacoes($conec){
			$result = $conec->query("SELECT * FROM publicacao");

			return $result;
		}				

		public function buscar_PublicacaoPorFoto($conec, $id_f){
			$result = $conec->query("SELECT id_publicacao FROM publicacao WHERE foto_id_foto = '{$id_f}'");

			return $result;
		}		

		public function listar_PublicacaoAprovada($conec){
			$result = $conec->query("SELECT * FROM publicacao WHERE privacidade != 0 and privacidade != 1");

			return $result;
		}

		public function listar_PorData($conec){
			$result = $conec->query("SELECT * FROM publicacao ORDER BY data DESC");

			return $result;
		}

		public function listar_PorId($conec, $id_publicacao){
			$result = $conec->query("SELECT * FROM publicacao WHERE id_publicacao = '{$id_publicacao}'");

			return $result;
		}










	}
?>