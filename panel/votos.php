<?php

	function drawpreferencias(){
		$query = "	SELECT us.user, c.name, DATE_FORMAT(v.fecha, '%y-%m-%d') AS fecha
					FROM usuario AS us,
						 voto AS v,
						 candidato AS c
					WHERE   us.idusuario = v.idusuario AND
							c.idcandidato = v.idcandidato
					ORDER BY us.user ASC";
			  
	$resultado = @mysql_query($query);
	
	$html = "
			<table cellspacing='8'>
				<tr>
					<th>Usuario</th>
					<th>Candidato</th>
					<th>Fecha</th>
				</tr>
			";
	if(@mysql_num_rows($resultado) >0 ){
		while($row = @mysql_fetch_array($resultado) ){
			$html .= " <tr>
							<td>".$row['user']."</td>
							<td>".$row['name']."</td>
							<td>".$row['fecha']."</td>";
			}
			$html .= "</tr>";
		} else {
			$html .= "<tr>
						<td>
							<label style='font-size:14px;'>No se han registrado votos aún</label>
						</td>
					  </tr>";
		}
		
		return $html."</table>";
	}
	
	echo drawpreferencias();
?>