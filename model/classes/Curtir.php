<?php 
	class Curtir{
		private $status, $usuario_id_usuario, $publicacao_id_publicacao;

		public function setUsuario_id_Usuario($id_usuario){
			if (is_int($id_usuario)) {
				$this -> usuario_id_usuario = $id_usuario;
			}
		}

		public function getUsuario_id_Usuario(){
			return $this -> usuario_id_usuario;
		}		

		public function setStatus($status){
			if (is_int($status)) {
				$this -> status = $status;
			}
		}

		public function getStatus(){
			return $this -> status;
		}

		public function setPublicacao_id_publicacao($id_publicacao){
			if (is_int($id_publicacao)) {
				$this -> publicacao_id_publicacao = $id_publicacao;
			}
		}

		public function getPublicacao_id_publicacao(){
			return $this -> publicacao_id_publicacao;
		}

	}
?>