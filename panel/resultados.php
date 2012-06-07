<?php

	include("../database/connection.php");
	connection();
	
	function drawVotos(){
		$query = "	SELECT c.name, v.idcandidato, count(v.idvoto) AS total, tvotos.t
					FROM voto AS v, candidato AS c,
						(SELECT count(*) AS t FROM voto) AS tvotos
					WHERE c.idcandidato = v.idcandidato
					GROUP BY v.idcandidato
					ORDER BY total DESC";
			  
	$result = @mysql_query($query);
	
	$html = "";
	if(@mysql_num_rows($result) >0 ){
		$html = ""; $i = 0;
		while($row = @mysql_fetch_array($result) ){ 
			$total_votos = $row["t"];
			$resultado = ($row["total"]*100)/$total_votos;
		?>
			<div>
            	<table cellspacing="8">
                	<tr>
                    	<td style="width:150px;"><?=$row["name"]?></td>
                        <td>
                            <div style="width:<?=number_format($resultado*5,0)?>px; background-color:#36c;">
                                &nbsp;<?=number_format($resultado,2)?>%&nbsp;
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

<?php
			}
		} else {
		}
		return $html;
	}
	drawVotos()
?>