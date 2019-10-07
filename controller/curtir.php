<?php 
	include_once '../model/dao/CurtirDAO.php';
	include_once '../model/dao/PublicacaoDAO.php';
	include_once '../model/dao/Conexao.php';

	$id_usuario = intval($_GET['id_u']);
	$id_foto = intval($_GET['id_f']);

	echo "id user $id_usuario\n";
	echo "id_foto $id_foto\n";

	$publidao = new PublicacaoDAO();
	$result1 = $publidao -> buscar_PublicacaoPorFoto($conec, $id_foto);
	$idpubli = $result1->fetch(PDO::FETCH_OBJ);

	echo "id pupli$idpubli->id_publicacao\n";

	$curtirdao = new CurtirDAO();
	$result2 = $curtirdao -> buscar_Curtida($conec, $id_usuario, intval($idpubli->id_publicacao));

	$i = $result2->rowCount();
	echo "i $i\n";
	$id_curtida = $result2->fetch(PDO::FETCH_OBJ);

	if ($i == 0) {
		$curtirdao -> cadastrar_Curtida($conec, 1, $id_usuario, intval($idpubli->id_publicacao));
		header("Location:../view/galeria.php");
	}else{
		echo 'Você já curtiu!';
		header("Location:../view/galeria.php");
	}

?>