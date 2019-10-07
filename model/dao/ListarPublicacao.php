<?php 
	include 'Conexao.php';

	$id_fot = $_GET['id_f'];
	
	$result = $conec->query("SELECT * FROM foto WHERE id_foto = '{$id_fot}'");

	$row = $result->fetch(PDO::FETCH_OBJ); 
	    if ($row != NULL) {
		   	Header("Content-type: ".$row->tipo);
		    echo "$row->conteudo"; 
	    }else{
	    	echo "Nenhuma Foto!";
	    }	

?>