<?php

	/* Database Conection */
	
	function connection(){
		if(!( $link = @mysql_connect("127.0.0.1","root","") )){
			echo "Server Connection refused"; exit();
		
		}
		if(!@mysql_select_db("ife", $link)){
			echo "Could not connect db"; exit();
		}
		
	}

?>