<?php
	session_start();
	ini_set("display_errors", 0);
	
	include("database/connection.php");
	connection();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
	<title>Instituto Federal Electoral</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  </head>

  <body>
    <div id="container">
      <div id="body_space">
        
        <!-- Header -->
        <?php 
			$menu = 1;
			include("header.php");
		?>
        
	    <div id="clouds">
	    </div>
	  </div>
	</div>
	<div id="page">
	  <div id="page-padding">
        <!-- start content -->	    
	    <div id="content">
	      <div id="content-padding">
          <?php
					$_SESSION["tipo_usuario"];
					if(!isset($_SESSION['user'])){
						include ("panel/form_register.php");
					}else if (isset ($_GET["votos"])){
						include ("panel/votos.php");
					} else if($_SESSION["tipo_usuario"] == 1 || isset ($_GET["resultado"])){
						include("panel/resultados.php");
					} else if($_SESSION["tipo_usuario"] == 2 ){
						include("panel/votar.php");
					}
			?>
		  </div>
		</div>
		<!-- end content -->
        
	    <!-- Right Panel -->
        <?php include("right_panel.php"); ?>
	  
      </div>
	  
      <!-- Footer -->
      <?php include("footer.php"); ?>
      
	</div>
  </body>
</html>