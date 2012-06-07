<h1>Para poder votar debes registrar ante el IFE</h1>
<p>
	<form action="database/new_user.php" method="post">
    	<fieldset>
        	<legend style="padding:0 10px;">Llena los sigueintes campos:</legend>
    
                <table cellpadding="10" cellspacing="10">
                    <tr>
                        <td><label>Usuario:</label> </td>
                        <td><input type="text" name="user" /> </td>
                    </tr>
                    <tr>
                        <td><label>Contraseña:</label> </td>
                        <td><input type="password" name="pass" /> </td>
                    </tr>
                    <tr>
                        <td><label>Nombre:</label> </td>
                        <td><input type="text" name="name" /> </td>
                    </tr>
                    <tr>
                        <td><label>Clave IFE:</label> </td>
                        <td><input type="text" name="clave" /> </td>
                    </tr>
                    <tr>
                        <td><label>Dirección:</label> </td>
                        <td><input type="text" name="direc" /> </td>
                    </tr>
                    <tr>
                    	<td align="right" colspan="2"> <input type="submit" value="Registrar" /></td>
                    </tr>
                </table>
                
         </fieldset>   	
	</form>
</p>