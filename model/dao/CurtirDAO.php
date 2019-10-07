<?php 
	class CurtirDAO{
		public function cadastrar_Curtida($conec, $status, $id_usuario, $publicacao){
			$result = $conec->exec("INSERT INTO curtir (status, usuario_id_usuario, publicacao_id_publicacao) VALUES ('{$status}', '{$id_usuario}', '{$publicacao}')");

			if($result){
				echo "Curtiu!";
			}else{
				echo "Falhou ao curtir!";
			}

			header("Location:../view/galeria.php");
		}

		public function buscar_Curtida($conec, $id_usuario, $id_publicacao){
			$result = $conec->query("SELECT * FROM curtir WHERE usuario_id_usuario = '{$id_usuario}' and publicacao_id_publicacao = '{$id_publicacao}'");

			return $result;
		}

		public function retirar_Curtida($conec){
			$result = $conec->mysql_query("UPDATE curtir set status = 0 WHERE id_curtir = '{$id_curtir}'");

			if($result){
				echo "dESCurtiu!";
			}else{
				echo "Falhou ao DEScurtir!";
			}

		}

		public function listar_PorCurtidas($conec){
			$result = $conec->query("SELECT publicacao_id_publicacao, count(curtir.publicacao_id_publicacao) AS quant_curtidas FROM curtir GROUP BY publicacao_id_publicacao ORDER BY quant_curtidas DESC");
			return $result;
		}		

		public function listar_PorCurtidaseData($conec, $id){
			$result = $conec->query("SELECT *, count(curtir.publicacao_id_publicacao) as quant_curtidas FROM curtir WHERE publicacao_id_publicacao = $id");
			return $result;
		}	





	}
?>