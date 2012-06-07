<?php
	
	session_start();
	ini_set("display_errors", 0);
	session_unset();
	session_destroy();
	header("Location: ../index.php");

?>