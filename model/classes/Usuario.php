<?php
	//Classe Usuário
	class Usuario{
		private $id_usuario, $nome, $email, $login, $senha, $nivel;

		public function __construct(/*$nome, $email, $login, $senha*/){
			//$this -> nome = $nome;
			//$this -> email = $email;
			//$this -> login = $login;
			//$this -> senha = $senha;
			//Nível de Acesso: 0 - Para Usuário Comum | 1 - Usuário Administrador
			$this -> nivel = 0;
		}

		public function setId_Usuario($id_usuario){
			if (is_int($id_usuario)) {
				$this -> id_usuario = $id_usuario;
			}
		}

		public function getId_Usuario(){
			return $this -> id_usuario;
		}


		public function setNome($nome){
			if (is_string($nome)) {
				$this -> nome = $nome;
			}
		}

		public function getNome(){
			return $this -> nome;
		}

		public function setEmail($email){
			if (is_string($email)) {
				$this -> email = $email;
			}
		}

		public function getEmail(){
			return $this -> email;
		}

		public function setLogin($login){
			if (is_string($login)) {
				$this -> login = $login;
			}
		}

		public function getLogin(){
			return $this -> login;
		}

		public function setSenha($senha){
			if (is_string($senha)) {
				$this -> senha = $senha;
			}
		}

		public function getSenha(){
			return $this -> senha;
		}

		public function setNivel($nivel){
			if (is_int($nivel)) {
				$this -> nivel = $nivel;
			}
		}

		public function getNivel(){
			return $this -> nivel;
		}

	}

?>