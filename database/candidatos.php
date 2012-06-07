<?php

	function drawCandidatos(){
		$query = "SELECT *
			  FROM candidato";
			  
	$resultado = @mysql_query($query);
	
	$html = "";
	if(@mysql_num_rows($resultado) >0 ){
		$html = ""; $i = 0;
		while($row = @mysql_fetch_array($resultado) ){
			if(($i % 2) == 0){
				$html .= "<tr></tr>";
			}
			$html .= "<td class='sep' align='center'>
                        	<div>
                            	<img src='images/".$row["imagen"]."' height='200' width='200' />
                            </div>
                            <div >
                            	<input type='radio' value='".$row["idcandidato"]."' name='voto' />".$row["name"]."<br />
                                <label style='font-size:9px;' >".$row["aka"]."</label>
                            </div>
                        </td>";
					$i++;
			}
			$html .= "</tr>";
		} else {
			$html .= "<tr>
						<td>
							<label style='font-size:14px;'>No se han registrado candidatos aún</label>
						</td>
					  </tr>";
		}
		
		return $html;
	}
	
?>