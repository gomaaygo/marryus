<?php 
	require_once '../model/dao/Conexao.php';
	require_once '../model/classes/Foto.php';
	require_once '../model/dao/FotoDAO.php';
	
	$foto = new Foto();
	$fotodao = new FotoDAO();

	$id_foto = intval($_GET['id_f']);

	$foto -> setId_foto($id_foto);

	$fotodao -> recusar_Foto($conec, $foto->getId_foto());

	header("Location: ../view/solicitacoes.php");


?>