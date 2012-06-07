<?php
	session_start();

	include("../database/connection.php");
	connection();

	$user = $_POST["user"];
	$pass = md5($_POST["pass"]);
	
	// Falta Validar
	
	$query = "SELECT us.idusuario, us.user, tu.idtipo_usuario AS tipo_usuario 
			  FROM usuario AS us,
    			tipo_usuario AS tu
			  WHERE us.tipo = tu.idtipo_usuario
			  	AND (us.user ='".$user."'  AND us.password ='".$pass."' )";
			  
	$resultado = @mysql_query($query);
	if(@mysql_num_rows($resultado) >0 ){
		$row = @mysql_fetch_array($resultado);
		
		$_SESSION["user"] = $row ["user"];
		$_SESSION["tipo_usuario"] = $row ["tipo_usuario"];
		$_SESSION["idusuario"] = $row ["idusuario"];
		
		header("location: ../index.php");
		} else {
			header("location: ../index.php?msg=error");
		}
	
	
	/*while($row = @mysql_fetch_array($resultado) ){
		echo $row['user']." ".$row['password']." ".$row['tipo_usuario']." <br />";
	}
*/
	/*if($user == "cesar"){
		header("location: ../index.php");
	} else{
		header("location: ../index.php?msg=error");
	}*/
	
	
?>