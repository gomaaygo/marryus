<?php 
	include 'Conexao.php';

	$id = $_GET['id'];

	//$fotodao = new FotoDAO();
	$result = $conec->query("SELECT * FROM foto WHERE id_foto = '{$id}'");

	$row = $result->fetch(PDO::FETCH_OBJ); 
	    if ($row != NULL) {
		   	Header("Content-type: ".$row->tipo);
		    echo "$row->conteudo"; 
	    }else{
	    	echo "Nenhuma Foto!";
	    }

 ?>