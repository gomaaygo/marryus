<?php 
	require_once '../model/dao/Conexao.php';
	require_once '../model/classes/Foto.php';
	require_once '../model/dao/FotoDAO.php';
	require_once '../model/dao/PublicacaoDAO.php';
	require_once '../model/classes/Publicacao.php';
	
	$foto = new Foto();
	$fotodao = new FotoDAO();

	//Transformando para o tipo BLOB(binário).
	$foto -> setConteudo(addslashes(file_get_contents($_FILES['file']['tmp_name'])));
	$foto -> setTamanho($_FILES["file"]['size']);
	$foto -> setNome($_FILES["file"]["name"]);
	$foto -> setTipo($_FILES["file"]['type']);
	$foto -> setUsuario_id_usuario(intval($_POST['id_usuario']));

	$fotodao -> cadastrar_Foto($conec, $foto->getConteudo(), $foto->getTamanho(), $foto->getNome(), $foto->getTipo(), 1, $foto -> getUsuario_id_usuario());

	$result = $fotodao -> listar_FotoAdm($conec);
	$row = $result->fetch(PDO::FETCH_OBJ);

	$publi = new Publicacao();
	$publidao = new PublicacaoDAO();

	$publi -> setFoto_id_foto(intval($row->id_foto));

	$publidao -> cadastrar_Publicacao($conec, $publi->getFoto_id_foto());
	$fotodao -> aprovar_Foto($conec, $publi -> getFoto_id_foto());

	header("Location: ../view/form_foto_adm.php");




 ?>