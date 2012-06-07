<?php
	session_start();
	ini_set("display_errors", 0);
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
			$menu = 6;
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
            <h1>Conoce a Tus ¿Candidatos?</h1>
            <p class="blue">This template was constructed by Steves-Templates.com.  You may use this template for personal or business website use, however you may not redistribute (offer for download or sale) this template in any fashion, unless permission has been granted by Steves-Templates.com.</p>
            <p class="grey">You may change or remove the Copyright notice, however the link to Steves-Templates.com must remain. This link does not need to be site wide, only front page, or entrance page. You have the option to remove this link by paying a <a href="http://www.steves-templates.com/buy.html">$10 fee here</a>.  Paying this fee or even keeping the link helps to support me, so I can keep providing everyone with more free and premium templates.  I appreciate it, thank you for choosing one of my web templates for your site.</p>
            <p class="grey">If you have problems while using this template, you can always contact me for support. This is a W3C Valid tableless CSS template, currently it is not covered by my user guide (which addresses tabled templates #44 and below).  A new guide is in the works.</p>
			<br />
            <h1>Últimas Noticias</h1>
            <p class="grey">This is temporary text place by the designer, remove and replace with your own. This is temporary text place by the designer, remove and replace with your own. This is temporary text place by the designer, remove and replace with your own. This is temporary text place by the designer, remove and replace with your own. This is temporary text place by the designer.</p>
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