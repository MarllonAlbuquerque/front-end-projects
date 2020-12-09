<?php session_start();  include('conexão.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>

    <link href="Bibliotecas/Documentos/css/fatorial.css" type="text/css" rel="stylesheet">

</head>
<body>

    <div class="teste">
    <figure>
           <img src=""/>
    </figure>
    </div>
                <form action="pgw.php" method="post">
            <fieldset>
 
                <legend>Informações</legend>
                <label>	
                    Saída:
                    <select name="Estado">
                    	<option></option>
                    	<option value="vers">Versóvia</option>
			      		<option value="cra">Cracóvia</option>
			      		<option value="gda">Gdansk</option>
			      		<option value="bre">Breslávia</option>
			      		<option value="poz">Poznan</option>		      		
			      		<option value="bia">Bialystok</option>
			      		<option value="lodz">Lódz</option>
						<option value="toru">Torún</option>
						
					 </select>
					
                 	
                </label>
                <br/>
                <label>	
                    Destino desejado:
                    <select name="Estado">
                    	<option></option>
                    	<option value="vers">Versóvia</option>
			      		<option value="cra">Cracóvia</option>
			      		<option value="gda">Gdansk</option>
			      		<option value="bre">Breslávia</option>
			      		<option value="poz">Poznan</option>		      		
			      		<option value="bia">Bialystok</option>
			      		<option value="lodz">Lódz</option>
						<option value="toru">Torún</option>
						
					 </select>
					
                 	
                </label>
                <br>
                <label>	
                    Check-in:
                    <input id="date" type="date"/>
                </label>
                <br/>
                <label>
                    Check-out:
                    <input id="date" type="date"/>
                </label>
                <br/>
            <input type="submit" value="Enviar"/>
            <input type="reset" name="Cancelar"/>
            </fieldset>
        </form>
    <h2><a href = "logout.php"> SAIR </a></h2>

</body>
</html>































