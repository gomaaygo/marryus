<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "galeria";

	try {
		//instancia objeto PDO, conectando no MySQL
	    $conec = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // apresenta o erro PDO 
	    $conec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    //echo "Conexao realizada com sucesso!"; 
	}catch(PDOException $e){
	    echo "Conexao falhou: " . $e->getMessage();
	}

 ?>