<?php 
	require_once '../model/dao/Conexao.php';
	require_once '../model/classes/Foto.php';
	require_once '../model/dao/FotoDAO.php';
	
	$foto = new Foto();
	$fotodao = new FotoDAO();

	//Transformando para o tipo BLOB(binário).
	$foto -> setConteudo(addslashes(file_get_contents($_FILES['file']['tmp_name'])));
	$foto -> setTamanho($_FILES["file"]['size']);
	$foto -> setNome($_FILES["file"]["name"]);
	$foto -> setTipo($_FILES["file"]['type']);
	$foto -> setSituacao();
	$foto -> setUsuario_id_usuario(intval($_POST['id_usuario']));

	$fotodao -> cadastrar_Foto($conec, $foto->getConteudo(), $foto->getTamanho(), $foto->getNome(), $foto->getTipo(), $foto -> getSituacao(), $foto -> getUsuario_id_usuario());

	header("Location: ../view/form_foto.php");

 ?>