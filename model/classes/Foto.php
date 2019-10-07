<?php 
	class Foto{
		private $id_foto, $conteudo, $tamanho, $nome, $tipo, $situacao, $usuario_id_usuario;

		public function setId_foto($id_foto){
			if (is_int($id_foto)) {
				$this -> id_foto = $id_foto;
			}
		}

		public function getId_foto(){
			return $this -> id_foto;
		}

		public function setConteudo($conteudo){
			$this -> conteudo = $conteudo;
		}

		public function getConteudo(){
			return $this -> conteudo;
		}

		public function setTamanho($tamanho){
			if (is_int($tamanho)) {
				$this -> tamanho = $tamanho;
			}
		}

		public function getTamanho(){
			return $this -> tamanho;
		}

		public function setNome($nome){
			if (is_string($nome)) {
				$this -> nome = $nome;
			}
		}

		public function getNome(){
			return $this -> nome;
		}

		public function setTipo($tipo){
			if (is_string($tipo)) {
				$this -> tipo = $tipo;
			}
		}

		public function getTipo(){
			return $this -> tipo;
		}

		public function setSituacao(){
				$this -> situacao = 0;
		}

		public function getSituacao(){
			return $this -> situacao;
		}

		public function setUsuario_id_Usuario($id_usuario){
			if (is_int($id_usuario)) {
				$this -> usuario_id_usuario = $id_usuario;
			}
		}

		public function getUsuario_id_Usuario(){
			return $this -> usuario_id_usuario;
		}

	}
?>