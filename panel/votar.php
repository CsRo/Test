<?php 
	include ("database/candidatos.php");
?>
<h1>Selecciona uno de los candidatos a "Presidente"</h1>
<p>
	<form action="database/new_vote.php" method="post">
    	<fieldset>
        	<legend style="padding:0 10px;">Tu voto es "Libre" y "Secreto"</legend>
            	
                <table>
					<?php
                        echo drawCandidatos();
                    ?>
                    <tr>
                    	<td align="right" colspan="2"> <input type="submit" value="Votar" /></td>
                    </tr>
                </table>
            
        </fieldset>
    </form>