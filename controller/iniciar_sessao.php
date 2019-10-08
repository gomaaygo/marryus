<?php 
	include '../model/dao/UsuarioDAO.php';
	include '../model/dao/Conexao.php';

	session_start();

	$dao = new UsuarioDAO();

	$result = $dao->buscar_Usuario($conec, $_POST['login'], $_POST['senha']);

	if($row = $result -> fetch(PDO::FETCH_OBJ)){
	 	$_SESSION['nivel'] = $row->nivel;
	 	$_SESSION['nome'] = $row->nome;
	 	$_SESSION['id_usuario'] = $row->id_usuario;

	 	header("location:../view/galeria.php");
	 }	else{
	 	header("location:../view/form_login.php");
	 }



 ?>
