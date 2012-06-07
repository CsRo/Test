<?php
	include("../database/connection.php");
	connection();
	
	$user = $_POST["user"];
	$pass = md5($_POST["pass"]);
	
	$name = $_POST["name"];
	$clave = $_POST["clave"];
	$direc = $_POST["direc"];
	
	$query ="INSERT INTO usuario( user, password, tipo) 
				VALUES ('".$user."', '".$pass."', 2)";
	
	@mysql_query($query);
	
	$idusuario = mysql_insert_id();
	
	
	$query = "INSERT INTO dato_usuario(nombre, direccion, clave, idusuario) 
				VALUES ('".$name."', '".$direc."', '".$clave."', ".$idusuario.")";

	@mysql_query($query);
	if(mysql_insert_id() >= 1){
		session_start();
		$_SESSION["user"] = $user;
		$_SESSION["tipo_usuario"] = 2;
		$_SESSION["idusuario"] = $idusuario;
		header("location: ../index.php");
	} else{
		header("location: ../index.php?msg=new_user");
	}
?>