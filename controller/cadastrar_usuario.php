<?php 
	include_once '../model/dao/UsuarioDAO.php';
	include_once '../model/dao/Conexao.php';
	include_once '../model/classes/Usuario.php';

	$usuario = new Usuario();
	$usuariodao = new UsuarioDAO();

	$usuario -> setNome($_POST['nome']);
	$usuario -> setEmail($_POST['email']);
	$usuario -> setLogin($_POST['login']);
	$usuario -> setSenha($_POST['senha']);

	$usuariodao -> cadastrar_Usuario($conec, $usuario->getNome(), $usuario->getEmail(), $usuario->getLogin(), $usuario->getSenha(), $usuario->getNivel());

?>