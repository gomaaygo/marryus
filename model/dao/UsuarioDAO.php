<?php 
	class UsuarioDAO{
		public function cadastrar_Usuario($conec, $nome, $email, $login, $senha, $nivel){
			$resultado = $conec ->exec("INSERT INTO usuario (nome, email, login, senha, nivel) VALUES ('{$nome}', '{$email}', '{$login}', '{$senha}', '{$nivel}')");

			if ($resultado) {
				echo 'Cadastrado com sucesso!';
			}
			else {
				echo 'Falha ao cadastrar!';
			}
		}

		public function buscar_Usuario($conec, $login, $senha){
			$result = $conec->query("SELECT * FROM usuario WHERE login = '{$login}' and senha = '{$senha}'");

			return $result;
		}








	}
?>