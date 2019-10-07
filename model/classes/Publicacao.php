<?php 
	class Publicacao{
		private $id_publicacao, $data, $foto_id_foto;

		public function setId_publicacao($id_publicacao){
			if (is_int($id_publicacao)) {
				$this -> id_publicacao = $id_publicacao;
			}
		}

		public function getId_publicacao(){
			return $this -> foto;
		}

		public function setData($data){
			$this -> date = $data;
		}

		public function getData(){
			return $this -> data;
		}

		public function setFoto_id_foto($id_foto){
			if (is_int($id_foto)) {
				$this -> foto_id_foto = $id_foto;
			}
		}

		public function getFoto_id_foto(){
			return $this -> foto_id_foto;
		}

	}
?>