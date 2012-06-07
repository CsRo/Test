<?php
	session_start();
	
	include("../database/connection.php");
	connection();
	
	$voto = $_POST["voto"];
	$idusuario = $_SESSION["idusuario"];
	
	$query = "SELECT *
			  FROM voto
			  WHERE idusuario = ".$idusuario;
			  
	$resultado = @mysql_query($query);
	if(@mysql_num_rows($resultado) >0 ){
		header("location: ../index.php?msg=notagain");
		
	} else {
		$query ="INSERT INTO voto(idusuario, idcandidato, fecha) 
				VALUES ('".$idusuario."', '".$voto."', NOW())";
	@mysql_query($query);
	header("location: ../index.php?msg=votedoit");
	}
	
?>