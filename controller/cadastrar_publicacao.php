<?php 
	require_once '../model/dao/Conexao.php';
	require_once '../model/dao/PublicacaoDAO.php';
	require_once '../model/dao/FotoDAO.php';
	require_once '../model/classes/Publicacao.php';


	$publi = new Publicacao();
	$publidao = new PublicacaoDAO();
	$fotodao = new FotoDAO();

	$id_foto = intval($_GET['id_f']);

	$publi -> setFoto_id_foto($id_foto);

	$publidao -> cadastrar_Publicacao($conec, $publi->getFoto_id_foto());
	$fotodao -> aprovar_Foto($conec, $publi -> getFoto_id_foto());

?>